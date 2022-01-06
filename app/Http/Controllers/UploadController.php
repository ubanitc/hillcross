<?php

namespace App\Http\Controllers;

use App\Models\Beats;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    public function store(Request $request){
        if ($request->hasFile('beat_upload')){

            $request->validate([
                'beat_upload'=>'mimes:mp3,aac,wav,flac,wma'
            ]);

            $file = $request->file('beat_upload');
            $folder = uniqid() . '-' . now()->timestamp;
            $filename = $file->getClientOriginalName();
            $file->storeAs('beats/tmp/'.$folder, $filename);

            TemporaryFile::create([
                'folder'=>$folder,
                'filename'=>$filename,
            ]);

            return $folder;
        }
        return '';
    }
    public function upload(Request $request){


      $temporaryFile = TemporaryFile::where('folder', $request->beat_upload)->first();

      if ($temporaryFile){

          $request->validate([
              'name'=> 'required|string',
              'genre'=> 'required|string',
              'beat_upload'=> 'required'

          ]);


          Storage::move('beats/tmp/'.$request->beat_upload.'/'.$temporaryFile->filename, 'public/beats/'.$request->beat_upload.'/'.$temporaryFile->filename);
          rmdir(storage_path('app/beats/tmp/'.$request->beat_upload));
          $temporaryFile->delete();

          $beat = Beats::create([
              'user_id'=>Auth::id(),
              'beat_name'=> $request->name,
              'status'=>'Pending',
              'data_id'=> now()->timestamp,
              'genre'=> $request->genre,
              'path'=> 'storage/beats/'.$request->beat_upload.'/'.$temporaryFile->filename,
          ]);

          session()->flash('upload_successful', 'Your Upload was Successful');

          return redirect()->route('user.home');
      }else{
          return redirect()->back()->withErrors(['failedUpload'=>'File Format not Supported: Upload Mp3, AAC, WAV, FLAC, WMA']);
      }


    }

    public function deleteBeat(Request $request){

        $beat = Beats::where('data_id',$request->del_id);
        $beat->delete();

        return redirect()->back();


    }
}
