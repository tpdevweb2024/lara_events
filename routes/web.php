<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

Route::get("/", [HomeController::class, "home"])->name("home");
Route::get("/hello", [HomeController::class, "hello"])->name("hello");
Route::get("/events", [EventController::class, "index"])->name("events.index");
