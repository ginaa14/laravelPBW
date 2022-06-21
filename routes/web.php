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

Route::get('/koneksii', function () {
    return view('koneksii');
});

Route::get('/mhs', 'MhsController@mhs')->middleware('auth');;

Route::get('/mhs/cari', 'MhsController@pencarian')->name('cari');;

Route::get('/mhs/tambah', 'MhsController@tambah');

Route::post('/mhs/simpan', 'MhsController@simpan');

Route::get('/mhs/edit/{id}', 'MhsController@edit');

Route::put('/mhs/update/{id}', 'MhsController@update');

Route::get('/mhs/hapus/{id}', 'MhsController@hapus');

Route::get('/users', 'AuthController@user')->middleware('auth');

Route::get('/users/formtambah', 'AuthController@formtambah')->middleware('auth');

Route::post('/users/simpanuser', 'AuthController@simpanuser')->middleware('auth');

Route::get('/user/ubahuser/{id}', 'AuthController@ubahuser');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/users/hapususer/{id}', 'AuthController@hapususer');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');;

Route::post('/users/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

