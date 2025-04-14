<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/courses/{id}/qrcode', [CourseController::class, 'generateQR']);
    Route::post('/attendance/scan', [AttendanceController::class, 'scan']);
    Route::post('/attendance/sign', [AttendanceController::class, 'sign']);
    Route::get('/admin/courses/{id}/attendances', [AdminController::class, 'attendances']);
});
