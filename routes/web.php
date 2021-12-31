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

Route::get('/instructions', function (){
    return view('instructions');
})->name('instructions');



Auth::routes(['verify'=>true]);

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
    'middleware'=>['isUser','verified']
], function (){
     Route::get('/dashboard', 'User\UserController@index');
});
