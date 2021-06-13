<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
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
    if (Auth::guard('web')->check()) {
        return redirect(RouteServiceProvider::HOME);
    }else{

        return view('auth.login');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard.index');
    // return view('dashboard');
})->name('dashboard');

// Route::get('logout',[AdminController::])

// User Managent routes
Route::middleware(['auth:sanctum', 'verified'])->prefix('users')->group(function (){

    Route::get('/',[UserController::class,'index'])->name('user.view');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
});


// Profile Managent routes
Route::middleware(['auth:sanctum', 'verified'])->prefix('profile')->group(function (){

    Route::get('/',[ProfileController::class,'index'])->name('profile.view');
    Route::get('/edit',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('/update',[ProfileController::class,'update'])->name('profile.update');
    Route::post('/reset',[ProfileController::class,'reset'])->name('profile.reset');
});
