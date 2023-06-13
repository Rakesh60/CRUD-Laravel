<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ibmstudencontroller;


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
// Route::view('/','welcome');


Route::get('showdata',[ibmstudencontroller::class,'showdata']);
Route::post('adddata',[ibmstudencontroller::class,'insertdata']);
Route::get('delete/{id}',[ibmstudencontroller::class,'deletedata']);
Route::get('edit/{id}',[ibmstudencontroller::class,'editdata']);
Route::post('/update',[ibmstudencontroller::class,'updatedata']);

Route::view('aditform','form');

