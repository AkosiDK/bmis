<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OfficialsController;
use App\Http\Controllers\Admin\ResidentController;
use Illuminate\Support\Facades\Route;

// User routes
Route::get('/userlandingpage', function () {
    return view('userlandingpage');
});
Route::get('/userannouncementpage', function () {
    return view('userannouncementpage');
});
Route::get('/usernewspage', function () {
    return view('usernewspage');
});
Route::get('/userdocumentpage', function () {
    return view('userdocumentpage');
});
Route::get('/userofficialspage', function () {
    return view('userofficialspage');
});
Route::get('/useraboutpage', function () {
    return view('useraboutpage');
});
// Route::get('/login', function () {
//     return view('userloginpage');
// });

// Authenticated user
Route::group([
    'prefix' => '/user',
    'middleware' => [
        'auth',
    ]
], function () {
    // 
});



// Admin routes
Route::group([
    'prefix' => '/admin',
    'middleware' => [
        'auth',
        'admin'
    ]
], function () {

    // /dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // officials
    Route::get('/officials', [OfficialsController::class, 'index'])->name('officials.index');
    Route::get('/officials/create', [OfficialsController::class, 'create'])->name('officials.create');
    Route::post('/officials/create', [OfficialsController::class, 'store'])->name('officials.store');
    Route::get('/officials/{id}/edit', [OfficialsController::class, 'edit'])->name('officials.edit');
    Route::post('/officials/{id}', [OfficialsController::class, 'update'])->name('officials.update');
    Route::get('/officials/{id}', [OfficialsController::class, 'destroy'])->name('officials.destroy');
    Route::get('/officials/search/{name}', [OfficialsController::class, 'search'])->name('officials.search');

    // Resident
    Route::get('/resident', [ResidentController::class, 'index'])->name('resident.index');
    Route::get('/resident/create', [ResidentController::class, 'create'])->name('resident.create');
    Route::post('/resident/create', [ResidentController::class, 'store'])->name('resident.store');
    Route::get('/resident/{id}', [ResidentController::class, 'show'])->name('resident.show');
    Route::get('/resident/{id}/edit', [ResidentController::class, 'edit'])->name('resident.edit');
    Route::post('/resident/{id}', [ResidentController::class, 'update'])->name('resident.update');
    Route::get('/resident/search/{name}', [ResidentController::class, 'search'])->name('resident.search');

    // TODO: Delete resident

    // TODO: Resident request

});












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

/*
|--------------------------------------------------------------------------
| Web Routes for userpages
|--------------------------------------------------------------------------





// /*
// |--------------------------------------------------------------------------
// | Web Routes for dashboard
// |--------------------------------------------------------------------------
// */
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/officials', function () {
    return view('officials');
})->middleware(['auth', 'verified'])->name('officials');

Route::get('/residents', function () {
    return view('residents');
})->middleware(['auth', 'verified'])->name('residents');

Route::get('/residentrequest', function () {
    return view('residentrequest');
})->middleware(['auth', 'verified'])->name('residentrequest');

Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth', 'verified'])->name('settings');

// Route::post('/residents', [Addresident::class, 'store'])->name('residents');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
