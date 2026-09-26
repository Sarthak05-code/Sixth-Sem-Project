<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("/", function () {
    return view("home");
});

Route::get("/notes", function () {
    return view("notes.index");
})->middleware('auth')->name('notes');

/* Register */
Route::get("/register", [AuthController::class, "showRegister"])->name(
    "register",
);
Route::post("/register", [AuthController::class, "register"]);

/* Login */
Route::get("/login", [AuthController::class, "showLogin"])->name("login");
Route::post("/login", [AuthController::class, "login"]);

/* Logout */
Route::post("logout", [AuthController::class, "logout"])->name("logout");
