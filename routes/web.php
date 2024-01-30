<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LoveLobby', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/homepage', function () {
    return view('landingpage');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('/land', function () {
    return view('land');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/others', function () {
    return view('otheruserprofile');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/adminchart', function () {
    return view('adminchart');
});
Route::get('/admintable', function () {
    return view('admintable');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
