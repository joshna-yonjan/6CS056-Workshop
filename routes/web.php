<?php

use App\Models\Student;
use App\Models\Course;
use App\Enums\Difficulty;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect("/students/");
});

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);