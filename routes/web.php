<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('mailable', function () {
    $employee = App\Models\Employee::find(1);
    return new App\Mail\BirthdayMail($employee);
});

//Middleware Auth Routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('dashboard', ['title' => 'Dashboard']);
    });

    Route::get('/mail', 'MailsController@sendMail')->name('employees.mail');

    //Employee Routes
    Route::get('/employees/export', 'EmployeesController@export')->name('employees.export');
    Route::resource('employees', 'EmployeesController')->except('show');

    //Message Routes
    Route::resource('messages', 'MessagesController')->only(['index', 'update']);

});

