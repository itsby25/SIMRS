<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\crudcontroller;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('clock', function () {
    return view('clock');
});


#sub_service
Route::get('tindakan_igd',[maincontroller::class,'in_igd']);
#services
Route::get('igd',[maincontroller::class,'igd']);
Route::get('rawin',[maincontroller::class,'rawin']);
Route::get('rajal',[maincontroller::class,'rajal']);
Route::get('lims',[maincontroller::class,'laborat']);
Route::get('pharmacy',[maincontroller::class,'farmasi']);
Route::get('ris',[maincontroller::class,'radiologi']);
Route::get('erm',[maincontroller::class,'rekamedis']);
Route::get('mcu',[maincontroller::class,'mcu']);
Route::get('fisio',[maincontroller::class,'rehap']);
Route::get('surgery',[maincontroller::class,'operasi']);
Route::get('darah',[maincontroller::class,'darah']);

#Frondend
Route::get('login',[maincontroller::class,'login']);
Route::any('dashboard',[maincontroller::class,'dashboard']);
Route::get('user',[maincontroller::class,'user_new']);
Route::get('main',[maincontroller::class,'register']);

#API
Route::post('user_new',[crudcontroller::class,'user_add']);
Route::get('user_get',[crudcontroller::class,'user_get_data']);
Route::post('pasien_new',[crudcontroller::class,'patient_add']);
Route::get('pasien_get',[crudcontroller::class,'get_data_pasien']);
Route::get('kunjungan_new',[crudcontroller::class,'add_data_kunjungan']);
Route::get('kunjungan_get',[crudcontroller::class,'get_data_kunjungan']);
Route::get('kunjungan_all',[crudcontroller::class,'get_data_kunjungan_all']);