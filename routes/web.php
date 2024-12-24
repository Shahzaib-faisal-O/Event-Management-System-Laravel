<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });
Route::resource('/', EventController::class);
Route::get('/create', [EventController::class, 'create'])->name('events.create');
Route::post('/', [EventController::class, 'store'])->name('events.store');

require __DIR__.'/auth.php';
