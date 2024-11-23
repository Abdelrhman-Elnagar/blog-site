<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('blog')->controller(BlogController::class)
    ->group(function(){
        Route::get('index','index')->name('blog.index');
        Route::get('about','about')->name('blog.about');
    });

Route::prefix('auth')->controller(AuthController::class)
    ->group(function () {
        Route::get('login','login')->name('auth.login');

        Route::get('reg','reg')->name('auth.reg');
        Route::post('reg','regPost')->name('auth.regPost');

        Route::get('fPass','fPass')->name('auth.fPass');
    });
