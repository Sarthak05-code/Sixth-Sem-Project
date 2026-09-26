<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

Route::get("/", function () {
    return view("home");
});

/** Notes */
Route::get("/notes", [NoteController::class, "index"])
    ->middleware("auth")
    ->name("notes");

Route::get("notes/create", [NoteController::class, "create"])
    ->middleware("auth")
    ->name("notes.create");

Route::post("/notes", [NoteController::class, "store"])
    ->middleware("auth")
    ->name("notes.store");

Route::get("notes/{id}/edit", [NoteController::class, "edit"])
    ->middleware("auth")
    ->name("notes.edit");

Route::put("/notes/{id}", [NoteController::class, "update"])
    ->middleware("auth")
    ->name("notes.update");

Route::delete("/notes/{id}", [NoteController::class, "destroy"])
    ->middleware("auth")
    ->name("notes.destroy");

Route::put("/notes/{id}/archive", [NoteController::class, "archive"])
    ->middleware("auth")
    ->name("notes.archive");

Route::put("/notes/{id}/unarchive", [NoteController::class, "unarchive"])
    ->middleware("auth")
    ->name("notes.unarchive");

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
