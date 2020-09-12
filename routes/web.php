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
    return view('frontoffice/principal');
});

Route::get('/admin/login', 'Admin\LoginController@index')->name('adminLogin');
Route::get('/admin/logout', 'Admin\LogoutController@logout')->name('adminLogout');
Route::post('/admin/login', 'Admin\LoginController@authenticate')->name('adminAuthenticate');
Route::get('/admin/home', 'HomeController@index')->name('adminHome')->middleware('auth', 'role:ADMIN');
Route::get('/admin/categoria', 'Admin\CategoriaController@index')->name('adminCategoria')->middleware('auth', 'role:ADMIN');


