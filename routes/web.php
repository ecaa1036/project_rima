<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\KaryawanController;

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
    return view('welcome');
});
Route::get('/', function () {
    return view('login');
});

Route::get('administrator',[AdministratorController::class,'show']);
Route::get('administrator/add',[AdministratorController::class,'add']);
Route::POST('administrator/create',[AdministratorController::class,'create']);
Route::get('administrator/hapus/{id_adm}',[AdministratorController::class,'hapus']);
Route::get('administrator/edit/{id_adm}',[AdministratorController::class,'edit']);
Route::get('administrator/update/{id_adm}',[AdministratorController::class,'update']);


Route::get('karyawan',[KaryawanController::class,'show']);
Route::get('karyawan/add',[KaryawanController::class,'add']);
Route::POST('karyawan/create',[KaryawanController::class,'create']);
Route::get('karyawan/hapus/{id}',[KaryawanController::class,'hapus']);
Route::get('karyawan/edit/{id}',[KaryawanController::class,'edit']);
Route::get('karyawan/update/{id}',[KaryawanController::class,'update']);




