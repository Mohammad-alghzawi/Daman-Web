<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClinetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/dashboard-home-login', DashboardController::class);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


    Route::resource('/about-us', AboutUsController::class);
    Route::resource('/gallary', GallaryController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/certificates', CertificateController::class);
    Route::resource('/clients', ClinetController::class);
    Route::resource('/admin', AdminController::class);
});



require __DIR__ . '/auth.php';




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');
