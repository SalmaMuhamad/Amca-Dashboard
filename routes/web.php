<?php

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

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/homeMahir', function () {
    return view('admin.homeMahir');
});

Route::get('/aboutMahir', function () {
    return view('admin.aboutMahir');
});

Route::get('/academicsMahir', function () {
    return view('admin.academicsMahir');
});

Route::get('/userTable', function () {
    return view('admin.userTable');
});

Route::get('/contactUs', function () {
    return view('admin.contactUs');
});
