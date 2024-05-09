<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::view("/", "livewire.home")->name("index.home");

Route::get('event-create', [EventController::class, 'index'])->name('index');

Route::post('event-create', [EventController::class, 'submit-event'])->name('submit.event');


