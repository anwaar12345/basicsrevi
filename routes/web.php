<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Phone;
use App\Post;
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