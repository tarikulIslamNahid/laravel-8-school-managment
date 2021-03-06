<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ExamTypeController;
use App\Http\Controllers\Backend\SchoolSubjectController;
use App\Http\Controllers\Backend\AssignSubjectController;
use App\Http\Controllers\Backend\Classes\StudentController;
use App\Http\Controllers\Backend\Year\studentYearController;
use App\Http\Controllers\Backend\group\StudentGroupController;
use App\Http\Controllers\Backend\shift\studentShiftController;
use App\Http\Controllers\Backend\fee\studentFeeCatController;
use App\Http\Controllers\Backend\fee\studentFeeAmountController;
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
    } else {

        return view('auth.login');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard.index');
    // return view('dashboard');
})->name('dashboard');

// Route::get('logout',[AdminController::])

// User Managent routes
Route::prefix('users')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('user.view');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
});


// Profile Managent routes
Route::prefix('profile')->group(function () {

    Route::get('/', [ProfileController::class, 'index'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/password/edit', [ProfileController::class, 'passedit'])->name('profile.reset');
    Route::post('/password/update', [ProfileController::class, 'passupdate'])->name('profile.passupdate');
});

// Class Managent routes
Route::prefix('student')->group(function () {

    // student class Management--
    Route::get('/class', [StudentController::class, 'class_index'])->name('student.class');
    Route::get('/class/create', [StudentController::class, 'class_create'])->name('student.class.create');
    Route::post('/class/store', [StudentController::class, 'class_store'])->name('student.class.store');
    Route::get('/class/delete/{id}', [StudentController::class, 'class_delete'])->name('student.class.delete');
    Route::get('/class/edit/{id}', [StudentController::class, 'class_edit'])->name('student.class.edit');
    Route::post('/class/update/{id}', [StudentController::class, 'class_update'])->name('student.class.update');

    // student Year Management--
    Route::get('/year', [studentYearController::class, 'year_index'])->name('student.year');
    Route::get('/year/create', [studentYearController::class, 'year_create'])->name('student.year.create');
    Route::post('/year/store', [studentYearController::class, 'year_store'])->name('student.year.store');
    Route::get('/year/delete/{id}', [studentYearController::class, 'year_delete'])->name('student.year.delete');
    Route::get('/year/edit/{id}', [studentYearController::class, 'year_edit'])->name('student.year.edit');
    Route::post('/year/update/{id}', [studentYearController::class, 'year_update'])->name('student.year.update');

    // student Group Management--
    Route::get('/group', [StudentGroupController::class, 'group_index'])->name('student.group');
    Route::get('/group/create', [StudentGroupController::class, 'group_create'])->name('student.group.create');
    Route::post('/group/store', [StudentGroupController::class, 'group_store'])->name('student.group.store');
    Route::get('/group/delete/{id}', [StudentGroupController::class, 'group_delete'])->name('student.group.delete');
    Route::get('/group/edit/{id}', [StudentGroupController::class, 'group_edit'])->name('student.group.edit');
    Route::post('/group/update/{id}', [StudentGroupController::class, 'group_update'])->name('student.group.update');

    // student Shift Management--
    Route::get('/shift', [studentShiftController::class, 'shift_index'])->name('student.shift');
    Route::get('/shift/create', [studentShiftController::class, 'shift_create'])->name('student.shift.create');
    Route::post('/shift/store', [studentShiftController::class, 'shift_store'])->name('student.shift.store');
    Route::get('/shift/delete/{id}', [studentShiftController::class, 'shift_delete'])->name('student.shift.delete');
    Route::get('/shift/edit/{id}', [studentShiftController::class, 'shift_edit'])->name('student.shift.edit');
    Route::post('/shift/update/{id}', [studentShiftController::class, 'shift_update'])->name('student.shift.update');


    // student Fee category Management--
    Route::get('/fee/category', [studentFeeCatController::class, 'fee_cat_index'])->name('student.fee.category');
    Route::get('/fee/category/create', [studentFeeCatController::class, 'fee_cat_create'])->name('student.fee.category.create');
    Route::post('/fee/category/store', [studentFeeCatController::class, 'fee_cat_store'])->name('student.fee.category.store');
    Route::get('/fee/category/delete/{id}', [studentFeeCatController::class, 'fee_cat_delete'])->name('student.fee.category.delete');
    Route::get('/fee/category/edit/{id}', [studentFeeCatController::class, 'fee_cat_edit'])->name('student.fee.category.edit');
    Route::post('/fee/category/update/{id}', [studentFeeCatController::class, 'fee_cat_update'])->name('student.fee.category.update');


    // student Fee Amount Management--
    Route::get('/fee/amount', [studentFeeAmountController::class, 'fee_amount_index'])->name('student.fee.amount');
    Route::get('/fee/amount/create', [studentFeeAmountController::class, 'fee_amount_create'])->name('student.fee.amount.create');
    Route::post('/fee/amount/store', [studentFeeAmountController::class, 'fee_amount_store'])->name('student.fee.amount.store');
    Route::get('/fee/amount/delete/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_delete'])->name('student.fee.amount.delete');
    Route::get('/fee/amount/edit/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_edit'])->name('student.fee.amount.edit');
    Route::get('/fee/amount/view/{id}', [studentFeeAmountController::class, 'fee_amount_view'])->name('student.fee.amount.view');
    Route::post('/fee/amount/update/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_update'])->name('student.fee.amount.update');



    // Exam Type--
    Route::get('/exam-type', [ExamTypeController::class, 'index'])->name('student.examtype.index');
    Route::get('/exam-type/create', [ExamTypeController::class, 'create'])->name('student.examtype.create');
    Route::post('/exam-type/store', [ExamTypeController::class, 'store'])->name('student.examtype.store');
    Route::get('/exam-type/delete/{id}', [ExamTypeController::class, 'destroy'])->name('student.examtype.destroy');
    Route::get('/exam-type/edit/{id}', [ExamTypeController::class, 'edit'])->name('student.examtype.edit');
    Route::post('/exam-type/update/{id}', [ExamTypeController::class, 'update'])->name('student.examtype.update');


    // School Subjects--
    Route::get('/subject', [SchoolSubjectController::class, 'index'])->name('student.subject.index');
    Route::get('/subject/create', [SchoolSubjectController::class, 'create'])->name('student.subject.create');
    Route::post('/subject/store', [SchoolSubjectController::class, 'store'])->name('student.subject.store');
    Route::get('/subject/delete/{id}', [SchoolSubjectController::class, 'destroy'])->name('student.subject.destroy');
    Route::get('/subject/edit/{id}', [SchoolSubjectController::class, 'edit'])->name('student.subject.edit');
    Route::post('/subject/update/{id}', [SchoolSubjectController::class, 'update'])->name('student.subject.update');

    // Subject Assign--
    Route::get('/subject/assign', [AssignSubjectController::class, 'index'])->name('student.subjectassign.index');
    // Route::get('/fee/amount/create', [studentFeeAmountController::class, 'fee_amount_create'])->name('student.fee.amount.create');
    // Route::post('/fee/amount/store', [studentFeeAmountController::class, 'fee_amount_store'])->name('student.fee.amount.store');
    // Route::get('/fee/amount/delete/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_delete'])->name('student.fee.amount.delete');
    // Route::get('/fee/amount/edit/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_edit'])->name('student.fee.amount.edit');
    // Route::get('/fee/amount/view/{id}', [studentFeeAmountController::class, 'fee_amount_view'])->name('student.fee.amount.view');
    // Route::post('/fee/amount/update/{fee_cat_id}', [studentFeeAmountController::class, 'fee_amount_update'])->name('student.fee.amount.update');
});
