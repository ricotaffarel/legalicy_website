<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\AdminMiddleware;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', function () {
        return view('admin.login');
    });
    Route::post('/login', [AuthController::class, 'login'])->name('dologin');
});
Route::get('/redirect', [AuthController::class, 'redirect']);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\WelcomeController::class, 'about']);
Route::get('/promo', [App\Http\Controllers\WelcomeController::class, 'promo']);
Route::get('/faq', [App\Http\Controllers\WelcomeController::class, 'faq']);
Route::get('/contact', [App\Http\Controllers\WelcomeController::class, 'contact']);
Route::get('/service1', [App\Http\Controllers\WelcomeController::class, 'service1']);
Route::get('/service2', [App\Http\Controllers\WelcomeController::class, 'service2']);
Route::get('/service3', [App\Http\Controllers\WelcomeController::class, 'service3']);
Route::get('/location-service3', [App\Http\Controllers\WelcomeController::class, 'locationservice3']);
Route::get('/service4', [App\Http\Controllers\WelcomeController::class, 'service4']);
Route::get('/service5', [App\Http\Controllers\WelcomeController::class, 'service5']);

Route::get('/detail-service1', [App\Http\Controllers\WelcomeController::class, 'detailservice1']);
Route::get('/deepdetail-service1', [App\Http\Controllers\WelcomeController::class, 'deepdetailservice1']);
Route::get('/detail-service2', [App\Http\Controllers\WelcomeController::class, 'detailservice2']);
Route::get('/detail-services2', [App\Http\Controllers\WelcomeController::class, 'detailServices2']);

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});