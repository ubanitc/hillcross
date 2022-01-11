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
        return view('adminviews.index');
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
}
