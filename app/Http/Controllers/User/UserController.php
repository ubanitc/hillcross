<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('userviews.home');
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
