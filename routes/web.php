<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagingTask;

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

Route::get('/', [ManagingTask::class, 'index'])->name('index');
Route::get('/create', [ManagingTask::class, 'create'])->name('create');
Route::post('/store', [ManagingTask::class, 'store'])->name('store');
Route::get('/edit/{id}', [ManagingTask::class, 'edit'])->name('edit');
Route::get('/update', [ManagingTask::class, 'update'])->name('update');
Route::get('/delete/{id}', [ManagingTask::class, 'create'])->name('delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
