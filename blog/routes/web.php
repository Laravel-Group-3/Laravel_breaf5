<?php

use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\UserDashboardController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::resource('/dashboard', DashboardadminController::class);

Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard.index');
Route::get('/userdashboard/{id}', [UserDashboardController::class, 'show'])->name('userdashboard.show');
Route::get('/userdashboard/{id}/edit', [UserDashboardController::class, 'edit'])->name('userdashboard.edit');
Route::put('/userdashboard/{id}', [UserDashboardController::class, 'update'])->name('userdashboard.update');
Route::delete('/userdashboard/{id}', [UserDashboardController::class, 'destroy'])->name('userdashboard.destroy');
