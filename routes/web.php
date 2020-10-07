<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


//Middleware Auth Routes
Route::group(['middleware' => 'auth'], function () {

    //Daashboard Route
    Route::get('/', function () {
        return view('dashboard', ['title' => 'Dashboard']);
    });

    //Employee Routes
    Route::get('/employees/export', 'EmployeesController@export')->name('employees.export');
    Route::resource('employees', 'EmployeesController')->except('show');

    //Message Routes
    Route::resource('messages', 'MessagesController')->only(['index', 'update']);

});

