<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Classes\StudentController;
use App\Http\Controllers\Backend\Year\studentYearController;
use App\Http\Controllers\Backend\group\StudentGroupController;
use App\Http\Controllers\Backend\shift\studentShiftController;
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

    // student class Management--
    Route::get('/class',[StudentController::class,'class_index'])->name('student.class');
    Route::get('/class/create',[StudentController::class,'class_create'])->name('student.class.create');
    Route::post('/class/store',[StudentController::class,'class_store'])->name('student.class.store');
    Route::get('/class/delete/{id}',[StudentController::class,'class_delete'])->name('student.class.delete');
    Route::get('/class/edit/{id}',[StudentController::class,'class_edit'])->name('student.class.edit');
    Route::post('/class/update/{id}',[StudentController::class,'class_update'])->name('student.class.update');

    // student Year Management--
    Route::get('/year',[studentYearController::class,'year_index'])->name('student.year');
    Route::get('/year/create',[studentYearController::class,'year_create'])->name('student.year.create');
    Route::post('/year/store',[studentYearController::class,'year_store'])->name('student.year.store');
    Route::get('/year/delete/{id}',[studentYearController::class,'year_delete'])->name('student.year.delete');
    Route::get('/year/edit/{id}',[studentYearController::class,'year_edit'])->name('student.year.edit');
    Route::post('/year/update/{id}',[studentYearController::class,'year_update'])->name('student.year.update');

    // student Group Management--
    Route::get('/group',[StudentGroupController::class,'group_index'])->name('student.group');
    Route::get('/group/create',[StudentGroupController::class,'group_create'])->name('student.group.create');
    Route::post('/group/store',[StudentGroupController::class,'group_store'])->name('student.group.store');
    Route::get('/group/delete/{id}',[StudentGroupController::class,'group_delete'])->name('student.group.delete');
    Route::get('/group/edit/{id}',[StudentGroupController::class,'group_edit'])->name('student.group.edit');
    Route::post('/group/update/{id}',[StudentGroupController::class,'group_update'])->name('student.group.update');

    // student Shift Management--
    Route::get('/shift',[studentShiftController::class,'shift_index'])->name('student.shift');
    Route::get('/shift/create',[studentShiftController::class,'shift_create'])->name('student.shift.create');
    Route::post('/shift/store',[studentShiftController::class,'shift_store'])->name('student.shift.store');
    Route::get('/shift/delete/{id}',[studentShiftController::class,'shift_delete'])->name('student.shift.delete');
    Route::get('/shift/edit/{id}',[studentShiftController::class,'shift_edit'])->name('student.shift.edit');
    Route::post('/shift/update/{id}',[studentShiftController::class,'shift_update'])->name('student.shift.update');
});
