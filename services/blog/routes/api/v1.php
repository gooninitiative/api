<?php

use App\Http\Controllers\Post\CreatePostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::controller(PostController::class)->group(function () {
//   Route::post('/posts', 'store');
//   Route::put('/posts/{id}', 'update');
//});
//
//Route::controller(CommentController::class)->group(function () {
//    Route::get('/comments/{id}', 'show');
//    Route::post('/comments', 'store');
//});

Route::post('/posts', CreatePostController::class);
