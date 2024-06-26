<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP Method:
 * 1. Get   : Untuk menampilkan
 * 2. Post  : Untuk mengirim data
 * 3. Put   : Untuk meng-update data
 * 4. Delete: Untuk menghapus data
 */

// route untuk menampilkan teks salam
route ::get('/salam', function(){
    return "assalamualaikum";
});

route::get('/profile', function () {
    return view('profile');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

//route untuk menampilkan halaman student
Route::get ('/admin/student', [StudentController::class, 'index']);

Route::get ('/admin/courses', [CoursesController::class, 'index']);

// untuk Menyimpan
Route::post('/admin/student/store', [StudentController::class, 'store'])->middleware('admin');

// untuk menampilkan hasil edit
Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit']);

// untuk menyimpan hasil update
Route::put('/admin/student/update/{id}', [StudentController::class, 'update']);

// untuk menghapus student
Route::delete('/admin/student/delete/{id}', [StudentController::class, 'destroy']);
 
// untuk menampilkan hasil student
Route::get('/admin/courses', [CoursesController::class, 'index']);