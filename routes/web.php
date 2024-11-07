<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeContoller;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'welcome'
    );
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'nama' => 'Brillian Aditya Suhargo',
        'kelas' => '11 PPLG 2',
        'likedin' => 'https://www.linkedin.com/in/brillian-aditya-suhargo-8743a42b2/',
        'repository' => 'https://github.com/Machaaavynn?tab=overview&from=2024-08-01&to=2024-08-31'
    ]);
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/grade', [GradeContoller::class, 'index']);
Route::get('/department', [DepartmentController::class, 'index']);
