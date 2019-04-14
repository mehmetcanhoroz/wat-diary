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

Route::group(["as" => "panel"], function () {

    Route::get('/', function () {
        return view('panel.index');
    });

    Route::group(["prefix" => "income", "as" => ".income"], function () {
        Route::get('/', function () {
            return view('panel.income.index');
        })->name(".index");
    });
    Route::group(["prefix" => "work-day", "as" => ".work_day"], function () {
        Route::get('/', function () {
            return view('panel.work_day.index');
        })->name(".index");
    });
    Route::group(["prefix" => "note", "as" => ".note"], function () {
        Route::get('/', function () {
            return view('panel.note.index');
        })->name(".index");
    });
    Route::group(["prefix" => "todo", "as" => ".todo"], function () {
        Route::get('/', function () {
            return view('panel.todo.index');
        })->name(".index");
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
