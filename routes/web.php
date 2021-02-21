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
use App\Almahir_content;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/54fddjn5487Login', function () {
    return view('auth.login');
})->middleware('guest');


Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('keykeykeykeykey/dashboard', function () {
        return view('admin.dashboard');
    });
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

Route::get('/admission', function () {
    return view('admin.admission');
});

//for intro
Route::post('/homeMahir', 'almahirController@postUpdateIntro');

Route::get('/homeMahir', function () {
    $introContent = Almahir_content::where('key', 'intro')->first();
    return view('admin.homeMahir', compact('introContent'));
});
//for (who , mission , vision)
Route::post('/aboutMahir', 'almahirController@postUpdateAbout');
//Route::get('/aboutMahir', 'almahirController@getUpdate' );

Route::get('/aboutMahir', function () {

    $whoContent = Almahir_content::where('key', 'breif')->first();
    $visionContent = Almahir_content::where('key', 'vision')->first();
    $missionContent = Almahir_content::where('key', 'mission')->first();

    return view('admin.aboutMahir', compact('whoContent', 'visionContent', 'missionContent'));


    /* 
    return view('admin.aboutMahir',compact('visionContent')); */
});

// Route::get('/aboutMahir' , function(){

//     $missionContent = Almahir_content::where('key','mission')->first();
//     return view('admin.aboutMahir',compact('missionContent')); 

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
