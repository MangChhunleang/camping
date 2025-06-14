<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;

// Student routes
Route::get('/students', [ClassroomController::class, 'getAllStudents']);
Route::post('/students', [ClassroomController::class, 'createStudent']);
Route::delete('/students/{id}', [ClassroomController::class, 'deleteStudent']);
Route::patch('/students/{id}', [ClassroomController::class, 'updateStudent']);

// Teacher routes
Route::get('/teachers', [ClassroomController::class, 'getAllTeachers']);
Route::get('/teachers/{id}', [ClassroomController::class, 'getTeacherById']);
Route::post('/teachers', [ClassroomController::class, 'createTeacher']);
Route::delete('/teachers/{id}', [ClassroomController::class, 'deleteTeacher']);
Route::patch('/teachers/{id}', [ClassroomController::class, 'updateTeacher']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Category Routes
Route::apiResource('categories', CategoryController::class);

// Product Routes
Route::apiResource('products', ProductController::class); 