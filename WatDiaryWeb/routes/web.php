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

Auth::routes();

Route::group(["as" => "panel", 'middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index')->name('.index');

    Route::group(["prefix" => "income", "as" => ".income"], function () {
        Route::get('/', 'IncomeController@index')->name(".index");
    });
    Route::group(["prefix" => "work-day", "as" => ".work_day"], function () {
        Route::get('/', 'WorkDayController@index')->name(".index");
    });
    Route::group(["prefix" => "note", "as" => ".note"], function () {
        Route::get('/', 'NoteController@index')->name(".index");
    });
    Route::group(["prefix" => "todo", "as" => ".todo"], function () {
        Route::get('/', 'TodoController@index')->name(".index");
    });
});
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sifre', function () {
    return Hash::make('123456789');
})->name('home');
