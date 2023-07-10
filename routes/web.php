<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

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

Route::redirect('/','/home');
Route::get('/home', [DiaryController::class, 'home'])->name('home#diary');
Route::get('/write',[DiaryController::class, 'write'])->name('write#diary');
Route::get('/read', [DiaryController::class, 'read'])->name('read#diary');
Route::post('/save', [DiaryController::class, 'save'])->name('save#diary');
Route::get('/view/{id}', [DiaryController::class, 'view'])->name('view#diary');
Route::get('/delete/{id}', [DiaryController::class, 'delete'])->name('delete#diary');
Route::get('edit/{id}', [DiaryController::class, 'edit'])->name('edit#diary');
Route::post('update', [DiaryController::class, 'update'])->name('update#diary');


