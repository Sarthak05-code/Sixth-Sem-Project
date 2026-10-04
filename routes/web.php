<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\ResourceController;

Route::get('/' , function() {
    return view('index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth' , 'role:admin'])->group(function() {
    Route::get('/institutions' , [InstitutionController::class , 'index'])->name('institutions.index');

    Route::post('/institutions' , [InstitutionController::class, 'store'])->name('institutions.store');
});

Route::middleware('auth')->group(function () {

    Route::get('/resources', [ResourceController::class, 'index'])
        ->name('resources.index');

    Route::post('/resources', [ResourceController::class, 'store'])
        ->name('resources.store');

});


require __DIR__.'/auth.php';
