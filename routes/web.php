<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
});


//crud employee
    Route::get('/employee','EmployeeController@index')->name('employee');
    Route::post('/form.insert','EmployeeController@store');
    Route::get('/insert',function(){
        return view('dashboard.table.crudemployee.insert');
    })->name('insert');
    Route::delete('/form.del/{id}','EmployeeController@destroy');
    Route::get('/form.edit/{id}','EmployeeController@edit');
    Route::put('/form.update/{id}','EmployeeController@update');
//end crud employee


