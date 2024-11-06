<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ApiSportController;


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

Route::get('/', [ApiSportController::class, 'home'])->name('web.home');
Route::get('home', [ApiSportController::class, 'home'])->name('web.home');
Route::get('livescore', [ApiSportController::class, 'livescore'])->name('web.livescore');
Route::get('match_detail', [ApiSportController::class, 'match_detail'])->name('web.match_detail');
Route::get('match_detail_basketball', [ApiSportController::class, 'match_detail_basketball'])->name('web.match_detail_basketball');
Route::get('match_detail_tennis', [ApiSportController::class, 'match_detail_tennis'])->name('web.match_detail_tennis');
Route::get('result', [ApiSportController::class, 'result'])->name('web.result');
Route::get('schedule', [ApiSportController::class, 'schedule'])->name('web.schedule');
Route::get('standing', [ApiSportController::class, 'standing'])->name('web.standing');
