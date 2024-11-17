<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClinetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [HomeController::class, 'index']);





// dashboard routes 

Route::get('/dash', function () {
    return view('dashboard/dashhome');
});

Route::resource('/about-us', AboutUsController::class);
Route::resource('/gallary',GallaryController::class);
Route::resource('/dashboard-home', DashboardController::class);
Route::resource('/employees',EmployeeController::class);
Route::resource('/certificates',CertificateController::class);
Route::resource('/clients',ClinetController::class);