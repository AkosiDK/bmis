<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Livewire\Residents\Addresident;
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

Route::get('/brgyclearance', function () {
    return view('brgyclearance');
})->middleware(['auth', 'verified'])->name('brgyclearance');

Route::get('/brgyclearanceviewprint', function () {
    return view('brgyclearanceviewprint');
})->middleware(['auth', 'verified'])->name('brgyclearanceviewprint');

Route::get('/brgyindigency', function () {
    return view('brgyindigency');
})->middleware(['auth', 'verified'])->name('brgyindigency');

Route::get('/brgybusinesspermit', function () {
    return view('brgybusinesspermit');
})->middleware(['auth', 'verified'])->name('brgybusinesspermit');

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

Route::post('/residents', [Addresident::class, 'store'])->name('residents');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
