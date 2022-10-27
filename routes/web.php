<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('comments', \App\Http\Controllers\CommentController::class);
Route::resource('companies', \App\Http\Controllers\CompanyController::class);

Route::get('companies2', [\App\Http\Controllers\CompanyController::class, 'index2']);
Route::get('comments2', [\App\Http\Controllers\CommentController::class, 'index2']);
