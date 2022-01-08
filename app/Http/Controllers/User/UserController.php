<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Beats;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $beat = Beats::where('user_id', Auth::id())->get();
        return view('userviews.home', ['beats'=>$beat]);
    }


    public function upload(){
        $beat = Beats::where('user_id', Auth::id())->get();
        if ($beat && $beat->count() >= 5){
            session()->flash('over_upload','You have reached the maximum number of uploads');
            return redirect()->route('user.home');
        }else{
            return view('userviews.upload');

        }
    }

    public function profile(){
        return view('userviews.profile');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'contact_number'=>'required',
            'instagram_handle'=>'required'
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->contact_number = $request->contact_number;
        $user->instagram_handle = $request->instagram_handle;
        $user->save();
        session()->flash('success','Your profile has been updated successfully');
        return redirect()->back();

    }
}
