<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/events', [EventsController::class, 'index' ]) ->name('events.index');
Route::get('/events/create', [EventsController::class, 'create']) ->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}/update', [EventsController::class, 'update'])->name('events.update');
Route::delete('/events/{event}/delete', [EventsController::class, 'delete'])->name('events.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
