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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
 
Route::get('blog', function () {
	return view('blog');
});

// route CRUD
Route::get('/anggota', 'AnggotaController@index');
Route::get('/anggota/tambah','AnggotaController@tambah');
Route::post('/anggota/store','AnggotaController@store');
Route::get('/anggota/edit/{id}','AnggotaController@edit');
Route::post('/anggota/update','AnggotaController@update');
Route::get('/anggota/hapus/{id}','AnggotaController@hapus');


// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');