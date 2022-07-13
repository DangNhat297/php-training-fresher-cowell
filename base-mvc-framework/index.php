<?php

use App\Controllers\HomeController;

require_once './vendor/autoload.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/add', [HomeController::class, 'add']);
Route::post('/add', [HomeController::class, 'store']);
Route::get('/user/{id}', [HomeController::class, 'getUser']);
Route::get('/user/{id}/edit/{group}', [HomeController::class, 'getUserAndGroup']);
Route::get('/user/{id}/delete', [HomeController::class, 'delete']);
Route::init();

// var_dump(Route::$register);
// $array["{id}"] = "category";

// echo '<pre>';

// print_r(Route::$register);

