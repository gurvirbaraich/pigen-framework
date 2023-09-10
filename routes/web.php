<?php

use Controllers\HomeController;
use Pigen\Foundation\Routing\Route;

/* 
 | ----------------------------------------------------------------
 | Web Routes
 | ----------------------------------------------------------------
 |
 | Here is where you can define web routes for your application. 
 | These routes are automatically loaded and are associated with
 | 'web' middlewar group.
 |  
*/

Route::GET("/", [HomeController::class, 'index']);
Route::GET("/posts/:id", [HomeController::class, 'singlePost']);

Route::GET("/posts/comments/:id", [HomeController::class, 'singlePost']);
Route::POST("/posts/reply/:postid/:commentId", [HomeController::class, 'singlePost']);