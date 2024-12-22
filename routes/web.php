<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c1;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('index','index');

Route::post('check',[c1::class,'login']);
Route::view('check','check');
Route::get('ds',[c1::class,'flush']);

Route::view('register','register');

Route::get('/ahome',[App\Http\Controllers\admincontroller::class,'index']);
Route::get('/aedit',[App\Http\Controllers\admincontroller::class,'index']);

Route::view('aregister', 'aregister');
Route::get('aregister', [c1::class,'show']);

Route::view('abook','abook');
Route::get('abook',[admincontroller::class,'show_rooms']);
Route::post('add_room',[admincontroller::class,'add_room']);
Route::get('delete_img/{id}',[admincontroller::class,'del_img']);
Route::get('edit_img/{id}',[admincontroller::class,'edit_img']);
Route::view('update_img','update_img');
Route::post('edit_room',[admincontroller::class,'update_room']);
Route::get('show',[c1::class,'show_all_booking']);

Route::view('contact','contact');
Route::post('/contact',[c1::class,'Insert_feedback']);
Route::get('afeedback', [c1::class,'disp_feed']);

Route::view('aedit', 'aedit');

Route::view('home','home');
Route::view('profile','profile');
Route::view('contact','contact');
Route::view('book','book');
Route::view('booking','booking');
Route::view('service','service');
Route::view('my_booking', 'my_booking');
Route::get('book',[c1::class,'disp_rooms']);
Route::get('checking/{id}',[c1::class,'check']);
Route::post('book_data',[c1::class,'add_booking']);
Route::get('show_book',[c1::class,'show_booking']);
Route::get('delete_booking/{id}',[c1::class,'delete_booking']);

// Resouce Controller
Route::resource('admin',Admin::class);

// 3d view
Route::view('model', 'room_model');