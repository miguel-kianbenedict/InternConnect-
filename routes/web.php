<?php

use Illuminate\Support\Facades\Route;


// 1. Role Selection (Landing Page)
Route::get('/', function () {
    return view('html.index');
})->name('role.selection');

// 2. Login Page 
Route::get('/login', function () {
    return view('html.login');
})->name('login');

// 3. Dashboards
Route::get('/student/dashboard', function () {
    return view('html.student-dashboard');
})->name('dashboard.student');

Route::get('/professor/dashboard', function () {
    return view('html.professor-dashboard');
})->name('dashboard.professor');

Route::get('/company/dashboard', function () {
    return view('html.company-dashboard');
})->name('dashboard.company');

Route::get('/coordinator/dashboard', function () {
    return view('html.coordinator-dashboard');
})->name('dashboard.coordinator');

//DATABASES

//STUDENT OJT INFORMATION
use App\Http\Controllers\OjtInformationController;
Route::post('/ojt-information/store', [OjtInformationController::class, 'store'])
    ->name('ojt.store');

// COORDINATOR MAINTENANCE
use App\Http\Controllers\CourseController;
Route::get('/coordinator/dashboard', [CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

// PROFESSOR MAINTENANCE
use App\Http\Controllers\RequirementCategoryController;
// Ensure this is not just returning a view, but calling the Controller
Route::get('/professor/dashboard', [RequirementCategoryController::class, 'index'])->name('maintenance.index');
Route::post('/maintenance/category', [RequirementCategoryController::class, 'store'])->name('category.store');
Route::delete('/maintenance/category/{id}', [RequirementCategoryController::class, 'destroy'])->name('category.destroy');
    

