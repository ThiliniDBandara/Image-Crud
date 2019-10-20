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

Route::get('/employee','employeeController@index');

Route::post('/addimage','employeeController@store')->name('addimage');

Route::get('/employeepage','employeeController@display');

Route::get('/editimage/{id}','employeeController@edit');

Route::put('/updateimage/{id}','employeeController@update');