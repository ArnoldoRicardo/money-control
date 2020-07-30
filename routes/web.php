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

Route::get('/test', function () {
    return [
        'nombre' => 'ricardo',
        'ciudad' => 'tuxtla'
    ];
});

Route::resource('/expense_reports', 'ExpenseReportController');
Route::get('/expense_report/{expense_report}/expenses/create', 'ExpenseController@create')->name('expense.create');
Route::post('/expense_report/{expense_report}/expenses', 'ExpenseController@store')->name('expense.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
