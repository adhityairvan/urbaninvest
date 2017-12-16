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
Route::get('/admin',function(){
    return view('adminPage.master');
});
Route::get('/admin/user-manage', function(){
    return view('adminPage.user-manage');
});
Route::get('/admin/manage-perusahaan/tambah',function (){
    return view('adminPage.tambahPerusahaan');
});
