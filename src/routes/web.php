<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('test-db', [WebController::class, 'testDB'])->name('web.testDB');
Route::get('test-redis', [WebController::class, 'testRedis'])->name('web.testRedis');
Route::get('tennis', [WebController::class, 'tennis'])->name('web.tennis');
Route::get('football', [WebController::class, 'football'])->name('web.football');
Route::get('basketball', [WebController::class, 'basketball'])->name('web.basketball');
Route::get('test', [WebController::class, 'test'])->name('web.test');
