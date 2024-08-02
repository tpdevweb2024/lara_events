<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

Route::get("/", [HomeController::class, "home"])->name("home");
Route::get("/hello", [HomeController::class, "hello"])->name("hello");
Route::get("/api/events", [EventController::class, "api"])->name("events.api");
Route::get("/api/events/{event}", [EventController::class, "apiShow"])->name("events.apishow");

Route::get("/events/today", [EventController::class, "today"])->name("events.today");
Route::get("/events/tomorrow", [EventController::class, "tomorrow"])->name("events.tomorrow");
Route::resource("events", EventController::class);
Route::resource("tags", TagController::class);
Route::resource("categories", CategoryController::class);
