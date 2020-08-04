<?php
use Illuminate\Support\Facades\Route;

Route::apiResource('/staff','StaffController');
Route::apiResource('/health_facility','HealthFacilityController');
Route::apiResource('/dependency','DependencyController');
Route::apiResource('/patient','PatientController');
Route::apiResource('/clinic_info','ClinicInfoController');
Route::apiResource('/pharmacy','PharmacyController');
Route::apiResource('/consultation','ConsultationController');
Route::apiResource('/lab_test','LabTestController');
Route::apiResource('/role','RoleController');
Route::apiResource('/doctor','DoctorController');







Route::group([

    'middleware'=>'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup','AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::delete('/user/{id}', 'AuthController@destroy');

});
