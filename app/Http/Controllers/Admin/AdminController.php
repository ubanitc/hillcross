<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beats;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $time_user = User::latest()->first();
        $time_beat = Beats::latest()->first();
       $no_of_users = User::all()->count() - 1;
       $no_of_beats = Beats::all()->count();
       $un_reviewed = Beats::where('status','Pending')->count();
        return view('adminviews.index', compact('no_of_users', 'no_of_beats','un_reviewed','time_user','time_beat'));
    }


    public function contestants(){
        $users = User::all();
        return view('adminviews.contestants',compact('users'));
    }

    public function pending(){


        $users= User::whereHas('beats')->with('beats', function ($query){
            $query->where('status','Pending');
        })
            ->get();

//        foreach($users as $user){
//            if (!$user->beats->isEmpty()){
//                echo $user->name.'<br>';
//                foreach ($user->beats as $beats){
//                    echo $beats->beat_name.'<br>';
//            }
//
//            }
//        }

                return view('adminviews.pending',compact('users'));



    }

    public function reviewed(){
        $users= User::whereHas('beats')->with('beats', function ($query){
            $query->where('status','Reviewed');
        })
            ->get();

//        foreach($users as $user){
//            if (!$user->beats->isEmpty()){
//                echo $user->name.'<br>';
//                foreach ($user->beats as $beats){
//                    echo $beats->beat_name.'<br>';
//            }
//
//            }
//        }


        return view('adminviews.reviewed',compact('users'));
    }


    public function review(Request $request){

        $beat = Beats::where('data_id',$request->del_id)->first();
        $beat->status = "Reviewed";
        $beat->save();

        return redirect()->back();


    }
}
