<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Beats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $beat = Beats::where('user_id', Auth::id())->get();

        return view('userviews.home', ['beats'=>$beat]);
    }

    public function home(){
        return view('userviews.home');
    }

    public function upload(){


      return view('userviews.upload');
    }

    public function profile(){
        return view('userviews.profile');
    }
}
