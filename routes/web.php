<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilepondController;

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


Route::post('/uploader', 'UploadController@store')->name('uploader');

Auth::routes(['verify'=>true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin dashboard routes

Route::group([
    'as'=>'admin.',
    'prefix'=>'admin',
    'middleware'=>'isAdmin'
], function(){
    Route::get('/dashboard', 'Admin\AdminController@index')->name('dashboard');
    Route::get('/contestants','Admin\AdminController@contestants')->name('contestants');
    Route::get('/pending','Admin\AdminController@pending')->name('pending');

});

//user dashboard routes

Route::group([
    'as'=>'user.',
    'middleware'=>['isUser','verified']
], function (){
     Route::get('/dashboard', 'User\UserController@index')->name('home');

     Route::get('/upload', 'User\UserController@upload')->name('upload');
     Route::delete('/upload', 'UploadController@deleteBeat')->name('upload');
     Route::get('/profile', 'User\UserController@profile')->name('profile');
     Route::patch('/profile', 'User\UserController@updateProfile')->name('profile');
     Route::post('/uploads', 'UploadController@upload')->name('beat_upload');


});
