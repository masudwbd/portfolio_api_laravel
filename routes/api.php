<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\SkillsController;
use App\Http\Controllers\Api\WorksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get( 'web-designs/', [WorksController::class , 'WebDesigns']);
Route::get( 'experiences/', [SkillsController::class , 'Experience']);
Route::get( 'skills/', [SkillsController::class , 'Skills']);
Route::get( 'testimonials/', [SkillsController::class , 'Testimonials']);
Route::post( 'messages/', [ContactController::class , 'Store']);