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

//Authentication routes
Route::post('login_user', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

//users that are not authenticated are redirected to the login route
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
});

