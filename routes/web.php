<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [JobController::class, 'index'])->name('jobs.index');
//Route::get('/search', SearchController::class);

Route::middleware(['guest'])->group(function(){
    Route::get('/register',[RegisterUserController::class, 'create'])->name('register');
    Route::post('/register',[RegisterUserController::class,'store'])->name('login');
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
});


Route::delete('/logout',[SessionController::class,'destroy'])->middleware(['auth']);
