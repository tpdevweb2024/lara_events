<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

Route::get("/", [HomeController::class, "home"])->name("home");
Route::get("/hello", [HomeController::class, "hello"])->name("hello");
Route::get("/events", [EventController::class, "index"])->name("events.index");

Route::resource("events", EventController::class);
Route::resource("tags", TagController::class);
Route::resource("categories", CategoryController::class);
