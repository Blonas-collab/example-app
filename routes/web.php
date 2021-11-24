<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FullCalendarController;

Route::resource('posts', PostController::class);


//Laravel 8 tutsmake
Route::get('ckeditor', [FullCalendarController::class, 'index']);
Route::post('fullcalendar/create', [FullCalendarController::class, 'create']);
Route::post('fullcalendar/update', [FullCalendarController::class, 'update']);
Route::post('fullcalendar/delete', [FullCalendarController::class, 'destroy']);
/*
//selbst
Route::resource('fullcalendar', FullCalendarController::class);
Route::get('fullcalendar/index', function (){return view('fullcalendar');});
Route::post('fullcalendar/create', function () {}); 
Route::post('fullcalendar/update',function () {});
Route::post('fullcalendar/delete', function () {});

//Laravel 7X tutsmake
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
