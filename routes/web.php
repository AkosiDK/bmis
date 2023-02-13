<?php

use App\Http\Controllers\Admin\ResidentController;
use Illuminate\Support\Facades\Route;




// TODO: User routes

// TODO: Admin routes
Route::group([
    'prefix' => '/admin',
    'middleware' => [
        'auth',
    ]
], function () {

    // /dashboard
    // /officials
    Route::get('/resident', [ResidentController::class, 'index'])->name('resident.index');
    Route::get('/resident/create', [ResidentController::class, 'create'])->name('resident.create');
    Route::post('/resident/create', [ResidentController::class, 'store'])->name('resident.store');
    


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
// */
// Route::get('/userlandingpage', function () {
//     return view('userlandingpage');
// });
// Route::get('/userannouncementpage', function () {
//     return view('userannouncementpage');
// });
// Route::get('/usernewspage', function () {
//     return view('usernewspage');
// });
// Route::get('/userdocumentpage', function () {
//     return view('userdocumentpage');
// });
// Route::get('/userofficialspage', function () {
//     return view('userofficialspage');
// });
// Route::get('/useraboutpage', function () {
//     return view('useraboutpage');
// });
// Route::get('/userloginpage', function () {
//     return view('userloginpage');
// });




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

require __DIR__.'/auth.php';
