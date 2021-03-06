<?php

use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NewController;

Route::get("/", function () {
    return Inertia::render("Welcome", [
        "canLogin" => Route::has("login"),
        "canRegister" => Route::has("register"),
        "laravelVersion" => Application::VERSION,
        "phpVersion" => PHP_VERSION,
    ]);
});

Route::middleware(["auth:sanctum", "verified"])
    ->get("/dashboard", function () {
        return Inertia::render("Dashboard");
    })
    ->name("dashboard");

Route::get("/", function () {
    return view("welcome");
})->name("wc");

Route::get("/home", function () {
    return view("home");
});

Route::get("/new_controller", [NewController::class, "index"])
    ->middleware("adult")
    ->name("new");

// Dashboard route + Add UserModel (use AppModelsUser;)
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    get all User DB Data
    $users = User::all();
//    pass DB Data to Dashboard
    return view('dashboard', compact('users'));
})->name('dashboard');
