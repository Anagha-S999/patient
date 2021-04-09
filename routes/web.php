<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;


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
Route::get('/',[PatientController::class , 'create']);
Route::post('/patientread',[PatientController::class , 'store']);
Route::get('/viewallpatient',[PatientController::class , 'index']);
Route::post('/patientsearch',[PatientController::class , 'search']);
Route::get('/patient/{id}/edit',[PatientController::class,'edit']);
