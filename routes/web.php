<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\logging\CustomLogger;
use App\Phone;
use App\Post;
use App\role;
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

Route::get('/one-one', function () {
    // return view('welcome');
    $phone = Phone::find(1);
    return $phone->user;
});


Route::get('one-many', function(){

// return User::find(1)->posts;
   return  Post::with('user')->get();
});


Route::get('/many-many', function(){
    // return User::find(1)->roles;
    // Log::channel('customlog')->info('Hello world!!');
    $log = "Hello World";
    CustomLogger::log($log);
    return role::find(1)->users;
});