<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

Route::get("/", function () {
    return view("home");
});

Route::get("/welcome", function () {
    return view("welcome");
})->name("wc");

Route::get("/new_controller", [NewController::class, "index"])
    ->middleware("adult")
    ->name("new");
