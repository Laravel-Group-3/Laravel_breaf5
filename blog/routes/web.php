<?php

use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\UserDashboardController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lessor', function () {
    return view('lessor.index');
});

Route::resource('/farm',FarmController::class);

Route::resource('/dashboard', DashboardadminController::class);
Route::resource('/Renter', RenterController::class);
Route::get('/Renterdashboard/{id}/edit', [RenterController::class, 'edit'])->name('Renterdashboard.edit');
Route::put('/Renterdashboard/{id}', [RenterController::class, 'update'])->name('Renterdashboard.update');
Route::get('/Renterdashboard', [RenterController::class, 'index'])->name('Renterdashboard.index');
Route::get('/Renterdashboard/{id}', [RenterController::class, 'show'])->name('Renterdashboard.show');

// Route::get('/search', [DashboardadminController::class, 'search'])->name('search');


Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard.index');
Route::get('/userdashboard/{id}', [UserDashboardController::class, 'show'])->name('userdashboard.show');
Route::get('/userdashboard/{id}/edit', [UserDashboardController::class, 'edit'])->name('userdashboard.edit');
Route::put('/userdashboard/{id}', [UserDashboardController::class, 'update'])->name('userdashboard.update');
Route::delete('/userdashboard/{id}', [UserDashboardController::class, 'destroy'])->name('userdashboard.destroy');

Route::get('/lessordashboard', [LessorDashboardController::class, 'index'])->name('lessordashboard.index');
Route::get('/lessordashboard/{id}', [LessorDashboardController::class, 'show'])->name('lessordashboard.show');
Route::get('/lessordashboard/{id}/edit', [LessorDashboardController::class, 'edit'])->name('lessordashboard.edit');
Route::put('/lessordashboard/{id}', [LessorDashboardController::class, 'update'])->name('lessordashboard.update');
Route::delete('/lessordashboard/{id}', [LessorDashboardController::class, 'destroy'])->name('lessordashboard.destroy');

Route::get('/app-profile', [DashboardadminController::class, 'showProfile'])->name('app-profile');


//for home page
Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');

Route::get('/search', [HomeController::class, 'search'])->name('home-page');

// Route::get('filter', [ProductController::class, 'filterProducts'])->name('filter');




