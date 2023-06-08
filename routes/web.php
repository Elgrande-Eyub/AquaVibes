<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Auth;
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


Route::fallback(function () {
    return redirect()->route('index');
});

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/index', function () {
    return view('index');
});

Route::get('/index/fr', function () {
    return view('indexFr');
})->name('indexFr');

Route::middleware(['auth'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('admin');
});

Route::post('/appointment', [AppointmentController::class,'store'])->name('appointment');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
