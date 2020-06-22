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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::put('books/{laporanpdf}','BooksController@pdf');

Route::resource('books','BooksController');

Route::put('students/{laporanpdf}','StudentsController@pdf');

Route::resource('students','StudentsController');

Route::put('pegawais/{laporanpdf}','PegawaisController@pdf');

Route::resource('pegawais','PegawaisController');

Route::put('members/{laporanpdf}','MembersController@pdf');

Route::resource('members','MembersController');

});