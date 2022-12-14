<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::middleware(['auth'])->group(function(){
    Route::resource('Post', PostController::class)->except('index');


    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});
Route::get('Post', [PostController::class, 'create']);
Route::get('Post',[PostController::class, 'edit']);
Route::patch('Post',[PostController::class, 'update']);

require __DIR__.'/auth.php';
