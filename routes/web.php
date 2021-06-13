<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Classes\StudentController;
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
Route::prefix('users')->group(function (){

    Route::get('/',[UserController::class,'index'])->name('user.view');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store',[UserController::class,'store'])->name('user.store');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
});


// Profile Managent routes
Route::prefix('profile')->group(function (){

    Route::get('/',[ProfileController::class,'index'])->name('profile.view');
    Route::get('/edit',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('/update',[ProfileController::class,'update'])->name('profile.update');
    Route::get('/password/edit',[ProfileController::class,'passedit'])->name('profile.reset');
    Route::post('/password/update',[ProfileController::class,'passupdate'])->name('profile.passupdate');
});

// Class Managent routes
Route::prefix('student')->group(function (){

    Route::get('/class',[StudentController::class,'class_index'])->name('student.class');
    Route::get('/class/create',[StudentController::class,'class_create'])->name('student.class.create');
     Route::post('/class/store',[StudentController::class,'class_store'])->name('student.class.store');
  Route::get('/class/delete/{id}',[StudentController::class,'class_delete'])->name('student.class.delete');
   Route::get('/class/edit/{id}',[StudentController::class,'class_edit'])->name('student.class.edit');
    Route::post('/class/update/{id}',[StudentController::class,'class_update'])->name('student.class.update');
});
