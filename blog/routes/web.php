<?php

use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentDashboardController;
use App\Http\Controllers\LessorDashboardController;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\AppProfileAdminController;

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

Route::get('/app-profile', [AppProfileAdminController::class, 'index'])->name('app-profile');
// Route::get('/edit-image/{id}', [AppProfileAdminController::class, 'update'])->name('edit-image');
Route::put('/app-profile/{id}', [AppProfileAdminController::class, 'update'])->name('app-profile.update');

// Route::get('/dashboard', [AppProfileAdminController::class, 'dashboard'])->name('dashboard');




    Route::get('/commentdashboard', [CommentDashboardController::class, 'index'])->name('commentdashboard.index');
    Route::get('/commentdashboard/{id}', [CommentDashboardController::class, 'show'])->name('commentdashboard.show');
    Route::delete('/commentdashboard/{id}', [CommentDashboardController::class, 'destroy'])->name('commentdashboard.destroy');

    Route::get('/appointment', [AppointmentDashboardController::class, 'index'])->name('appointment.index');
    Route::get('/appointment/{id}', [AppointmentDashboardController::class, 'show'])->name('appointment.show');
    //route for pagination
    Route::get('/users', [UserDashboardController::class, 'index'])->name('userdashboard.index');
    Route::get('/users', [LessorDashboardController::class, 'index'])->name('lessordashboard.index');
    Route::get('/farms', [RenterController::class, 'index'])->name('Renterdashboard.index');



//for home page
Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');

Route::get('/search', [HomeController::class, 'search'])->name('home-page');

// Route::get('filter', [ProductController::class, 'filterProducts'])->name('filter');




