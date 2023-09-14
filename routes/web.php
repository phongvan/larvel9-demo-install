<?php

use Illuminate\Support\Facades\Auth;
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

    //Auth::user()->id;
    Auth::loginUsingId(4);

    //xbecker@example.com
    return view('welcome'); // TInhTN
});

Route::resource('posts',\App\Http\Controllers\PostsController::class);
