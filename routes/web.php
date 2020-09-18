<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowHomePage;


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
    return view('welcome');
});


Route::get('/home/{id}',[ShowHomePage::class,'showHomePage']);

Route::get('/new_user',function (){return view('add_new_user');});

Route::post('/add_new_user',[ShowHomePage::class,'addNewUser']);

Route::get('/get_users',[ShowHomePage::class,'getUsers']);