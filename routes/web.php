<?php

// use Illuminate\Support\Facades\Route;

// // Route::get('/student', function () {
// //     return view('student');
// // });
// Route::get('/profile', function () {
//     $name = "Jhun Bart";
//     $course = "BSIT";
//     $section = "IT-2A";
 
//     return view('profile', compact('name', 'course', 'section'));
// });

// use App\Http\Controllers\StudentController;
 

//  Route::get('/studentinfo', [StudentController::class, 'index']);
use App\Http\Controllers\AppointmentController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('appointments', AppointmentController::class);