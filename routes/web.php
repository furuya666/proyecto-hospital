<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/personas', 'HomeController@persona');

Route::get('medical-center/home','MainController@home');
Route::get('medical-center/medical-appointment','MainController@medical_appointment');
Route::get('medical-center/medical-control','MainController@medical_control');
Route::get('medical-center/user','MainController@user');
Route::get('medical-center/diagnosis','MainController@diagnosis');
Route::get('medical-center/ultrasound','MainController@ultrasound');
Route::get('medical-center/benefit','MainController@benefit');

//create
Route::post('medical-center/user/create', 'ProcessController@addUser');
Route::post('medical-center/ultrasound/create', 'ProcessController@addEcografia');
Route::post('medical-center/benefit/create', 'ProcessController@addPrestacion');
Route::post('medical-center/diagnosis/create', 'ProcessController@addDiagnostico');
Route::post('medical-center/medical-appointment/create', 'ProcessController@addCitaMedica');
Route::post('medical-center/create_medical','ProcessController@addHistorialClinico');
//edit

Route::post('medical-center/ultrasound/edit', 'ProcessController@postEditEcografia');
Route::post('medical-center/benefit/edit', 'ProcessController@postEditPrestacion');
Route::post('medical-center/diagnosis/edit', 'ProcessController@postEditDiagnosis');
Route::post('medical-center/user/edit', 'ProcessController@postEditUser');
Route::post('medical-center/medical-appointment/cancel', 'ProcessController@cancelappointment');
Route::post('medical-center/medical-appointment/attended', 'ProcessController@attendedappointment');
Route::post('medical-center/medical-appointment/edit', 'ProcessController@postEditMedicalAppointment');

Route::get('medical-center/create_medical/{id}','MainController@create_medical_appointment');
//Reportes
Route::get('medical-center/pdf/{id}','MainController@reportpdf');


