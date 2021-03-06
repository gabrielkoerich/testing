<?php

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

/**
 * User API routes
 */
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [App\Http\Controller\Api\UserController::class, 'index']);
    Route::get('/user/{id}', [App\Http\Controller\Api\UserController::class, 'find'])
        ->where('id', '[0-9]+');
    Route::get('/user/{id}/posts', [App\Http\Controller\Api\UserController::class, 'findPosts'])
        ->where('id', '[0-9]+');


    /**
     * Post API routes
     */
    Route::get('/post', [App\Http\Controller\Api\PostController::class, 'index']);
    Route::get('/post/{id}', [App\Http\Controller\Api\PostController::class, 'find'])
        ->where('id', '[0-9]+');
    Route::get('/post/{id}/comments', [App\Http\Controller\Api\PostController::class, 'findComments'])
        ->where('id', '[0-9]+');
});
