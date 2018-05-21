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
    return view('masuk');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('dosen/register', 'DosenAuth\RegisterController@showRegistrationForm')->name('dosen.register');
Route::post('dosen/register', 'DosenAuth\RegisterController@register');

Route::get('dosen/login', 'DosenAuth\LoginController@showLoginForm')->name('dosen.login');
Route::post('dosen/login', 'DosenAuth\LoginController@login');
Route::post('dosen/logout', 'DosenAuth\LoginController@logout')->name('dosen.logout');
// Password Reset Routes...
Route::get('password/reset', 'DosenAuth\ForgotPasswordController@showLinkRequestForm')->name('dosen.password.request');
Route::post('password/email', 'DosenAuth\ForgotPasswordController@sendResetLinkEmail')->name('dosen.password.email');
Route::get('password/reset/{token}', 'DosenAuth\ResetPasswordController@showResetForm')->name('dosen.password.reset');
Route::post('password/reset', 'DosenAuth\ResetPasswordController@reset');

Route::view('/dosen','Dosen.Beranda')->middleware('dosen');


//Route Mahasiswa

Route::get('/kerja-praktek', 'Mahasiswa\KerjaPraktek@index')->name('kerja-praktek');
Route::get('/bimbingan', 'Mahasiswa\Bimbingan@index')->name('bimbingan');


Route::get('/dosen/kerja-praktek', 'Dosen\KerjaPraktek@index')->name('dosen.kerja-praktek');
Route::get('/dosen/bimbingan', 'Dosen\Bimbingan@index')->name('dosen.bimbingan');
