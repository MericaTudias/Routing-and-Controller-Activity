<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AboutMe/{id}', [AboutMeController::class, 'show']);
Route::get('/skills/{id}', [SkillsController::class, 'show']);
Route::get('/hobbies/{id}', [HobbiesController::class, 'show']);