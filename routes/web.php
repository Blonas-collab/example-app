<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FullCalendarController;

Route::resource('posts', PostController::class);

Route::resource('fullcalendar', FullCalendarController::class);
Route::get('fullcalendar/index', function (){
    return view('fullcalendar');
});
Route::post('fullcalendar/create', function () {});
Route::post('fullcalendar/update',function () {});
Route::post('fullcalendar/delete', function () {});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
