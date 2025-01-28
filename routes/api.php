<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstanController;
use App\Http\Controllers\MainGroupController;
use App\Http\Controllers\CourseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('ostan-list',[App\Http\Controllers\OstanController::class, 'getOstan']);
Route::post('/user/info',[App\Http\Controllers\OstanController::class, 'saveUserData']);



Route::post('add-main', [MainGroupController::class, 'addGroup']);

Route::post('add-course', [CourseController::class, 'addCourse']);

Route::get('all-groups', [MainGroupController::class, 'allGroup']);
Route::get('all-course', [CourseController::class, 'allCourse']);

