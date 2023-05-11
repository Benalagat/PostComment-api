<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('posts',[PostController::class,'createPost']);
Route::post('comments',[CommentController::class,'createcomment']);
Route::get('posts/{id}',[PostController::class,'show']);
Route::get('displaypost/{id}',[PostController::class,'display']);
Route::get('comments/{id}',[CommentController::class,'show']);
