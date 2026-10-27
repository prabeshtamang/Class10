<?php

use App\Http\Controllers\PageController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/all-courses', [PageController::class, 'allCourses'])->name('all-courses');
Route::get('/upcoming-classes', [PageController::class, 'upcomingClasses'])->name('upcoming-classes');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/mentors', [PageController::class, 'mentors'])->name('mentors');
Route::get('/recorded-videos', [PageController::class, 'recordedVideos'])->name('recorded-videos');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');




// Course Route

Route::get('/course/index', function () {
    return view('course.index');
});

Route::get('/course/edit', function () {
    return view('course.edit');
});

Route::get('/course/create', function () {
    return view('course.create');
});

Route::post('/course/store', function (Request $request) {
    // return $request;
    Course::create([
        "title" => $request->name,
        "price" => $request->price,
        "description" => $request->description,
    ]);
    return redirect("/course/index");
});
