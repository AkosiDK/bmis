<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/officials', function () {
    return view('officials');
})->middleware(['auth', 'verified'])->name('officials');

Route::get('/residents', function () {
    return view('residents');
})->middleware(['auth', 'verified'])->name('residents');

Route::get('/certificates', function () {
    return view('certificates');
})->middleware(['auth', 'verified'])->name('certificates');

Route::get('/businesspermits', function () {
    return view('businesspermits');
})->middleware(['auth', 'verified'])->name('businesspermits');

Route::get('/blotters', function () {
    return view('blotters');
})->middleware(['auth', 'verified'])->name('blotters');

Route::get('/transactions', function () {
    return view('transactions');
})->middleware(['auth', 'verified'])->name('transactions');

Route::get('/households', function () {
    return view('households');
})->middleware(['auth', 'verified'])->name('households');

Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settings');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
