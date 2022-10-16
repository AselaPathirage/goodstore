<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\FacebookController;

use App\Http\Controllers\Ad\CategoryController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModeratorController;



use App\Models\Vehicle;
use App\Models\Property;




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

Route::get('/', function () {
    $vehicles = Vehicle::all()->where('approved', '=', 1)->sortByDesc('created_at');
    return view('welcome', compact('vehicles', $vehicles));
});

// Route::get('register', 'Auth\RegisterController@register');

Route::view('/quickview', 'quickview');


Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'storeUser']);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail']);
Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::get('/advertisement/category', [CategoryController::class, 'category']);

Route::get('/advertisement/vehicle', [VehicleController::class, 'createStep1']);
Route::post('/advertisement/vehicle', [VehicleController::class, 'postCreateStep1']);

Route::get('/advertisement/vehicleprev', [VehicleController::class, 'createStep2']);
Route::post('/advertisement/vehicleprev', [VehicleController::class, 'store']);

Route::get('/vehicle', [VehicleController::class, 'index']);
Route::get('/vehicle/vehiclequickview/{id}', [VehicleController::class, 'viewpage']);

Route::get('/advertisement/property', [PropertyController::class, 'createStep1']);
Route::post('/advertisement/property', [PropertyController::class, 'postCreateStep1']);

Route::get('/advertisement/propertyprev', [PropertyController::class, 'createStep2']);
Route::post('/advertisement/propertyprev', [PropertyController::class, 'store']);

Route::get('/property', [PropertyController::class, 'index']);
Route::get('/property/propertyquickview/{id}', [PropertyController::class, 'viewpage']);


Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');
Route::post('admin/conf', [AdminController::class, 'conf'])->name('admin.conf');
Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('admin/vehicles', [AdminController::class, 'vehicles']);
    Route::get('admin/vehicleapp/{id}', [AdminController::class, 'vehicleapp']);
    Route::get('admin/vehicledel/{id}', [AdminController::class, 'vehicledel']);
    Route::get('admin/properties', [AdminController::class, 'properties']);
    Route::get('admin/propertyapp/{id}', [AdminController::class, 'propertyapp']);
    Route::get('admin/propertydel/{id}', [AdminController::class, 'propertydel']);

    Route::get('admin/account', function () {
        return view('admin.account');
    });
    // Route::get('admin/updatepassword', [AdminController::class, 'updatepassword']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout sucessfully');
        return redirect('admin');
    });
});
