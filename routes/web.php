<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin dashboard routes

Route::group([
    'as'=>'admin.',
    'prefix'=>'admin',
    'middleware'=>'isAdmin'
], function(){
    Route::get('/dashboard', 'Admin\AdminController@index');
});

//user dashboard routes

Route::group([
    'as'=>'user.',
    'middleware'=>'isUser'
], function (){
     Route::get('/dashboard', 'User\UserController@index');
});
