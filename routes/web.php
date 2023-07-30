<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Task\MultifieldController;
use App\Http\Controllers\Task\SellerController;
use App\Http\Controllers\Task\TaskController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::prefix('itwaybd')->group(function () {
    Route::get('tasks/one', [MultifieldController::class, 'index'])->name('task.one');
    Route::post('tasks/one/save', [MultifieldController::class, 'store'])->name('service.store');
    Route::get('tasks/two', [SellerController::class, 'index'])->name('task.two');
    Route::post('tasks/two/save', [SellerController::class, 'store'])->name('seller.store');
});
