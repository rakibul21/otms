<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\StudentAuthController;

//Route::get('/test-student', function (){
//    return 'Hello Bangaladesh..';
//});

Route::middleware(['student'])->group(function ()
{
    Route::get('/student-dashboard', [StudentAuthController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');
    Route::get('/student-all-course', [StudentController::class, 'allcourse'])->name('student.all-course');
    Route::get('/student-profile', [StudentController::class, 'profile'])->name('student.profile');

});
