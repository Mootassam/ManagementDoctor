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

Auth::routes();
// route pour specialité //
Route::get('/home', 'HomeController@index')->name('home');
Route::get('GDOCTOR/listSpecial', 'specialController@listSpecial');
Route::post('GDOCTOR/save','specialController@saveList');
route::delete('GDOCTOR/{id}', 'specialController@destroy');

// route pour user //
route::get('/listprofile', 'UserController@listUser');
route::get('/profile', 'UserController@index');
route::get('chercher' ,'UserController@chercher') ;
Route::post('user/store','UserController@store') ;
Route::get('user/edit/{id}' ,'UserController@edit' );
Route::put('user/update/{id}' ,'UserController@update');
Route::delete('destroy/user/{id}', 'UserController@destroy');

// route pour le doctotr //
route::get('/addDoctor', 'doctorController@listD');
route::post('doctor/store', 'doctorController@store');
route::get('allmedecin','doctorController@index') ;
route::get('doctor/show','doctorController@show') ;
route::post('cherhcerM', 'doctorController@chercher') ;
Route::delete('doctor/delete/{id}', 'doctorController@destroy');

//route pour le jour de travaille //
route::get('jour/index','travailleController@index');
route::post('sotre/travaille', 'travailleController@store');

// Route pour le Patient  //
Route::get('index', 'patientsController@index' ) ;
Route::get('create', 'patientsController@create') ;
Route::post('storePatient','patientsController@store') ;
Route::put('patient/update/{id}','patientsController@update');
Route::DELETE('destroy/{id}', 'patientsController@destroy') ;

// Route pour la fiche de rendez vous //
Route::get('fiche/index', 'ficheController@index') ;
Route::post('fiche/store', 'ficheController@store');
Route::delete('fiche/destroy/{id}','ficheController@destroy');

// Route pour Appointemetns //
Route::get('appointements/index', 'appointementsController@index');
Route::get('appointements/show', 'appointementsController@show');
Route::post('appointements/store', 'appointementsController@store');
Route::put('appointements/update/{id}', 'appointementsController@update');
Route::delete('appointements/destroy/{id}', 'appointementsController@destroy');





