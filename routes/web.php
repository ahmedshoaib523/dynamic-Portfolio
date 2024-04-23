<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Redirect;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [WebController::class, 'webHome'])->name('web.home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/Profile/edit/{id?}', [HomeController::class, 'profileEdit'])->name('admin.profileEdit');
    Route::post('/Profile/update', [HomeController::class, 'profileUpdate'])->name('admin.profileUpdate');
    Route::get('/password/edit', [HomeController::class, 'PasswordEdit'])->name('admin.PasswordEdit');
    Route::post('/password/update', [HomeController::class, 'PasswordUppdate'])->name('admin.PasswordUppdate');
});

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/logo/edit', [AdminController::class, 'logoEdit'])->name('admin.logoEdit');
    Route::post('/logo/update', [AdminController::class, 'logoUpdate'])->name('admin.logoUpdate');
    Route::get('/config/edit', [AdminController::class, 'configEdit'])->name('admin.configEdit');
    Route::post('/config/update', [AdminController::class, 'configUpdate'])->name('admin.configUpdate');
});

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
});
