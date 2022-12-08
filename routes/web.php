<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

//this is the route for login
Route::post('dashboard', [LoginController::class, 'login']);


//users that are not authenticated are redirected to the login route
Route::middleware('auth')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::post('logout', [LoginController::class, 'logout']);
    Route::post('timein', [DashboardController::class,'timein']);
    Route::post('timeout', [DashboardController::class, 'timeout']);
    Route::get('isRegisteredIn',[DashboardController::class, 'isRegisteredIn']);

});

