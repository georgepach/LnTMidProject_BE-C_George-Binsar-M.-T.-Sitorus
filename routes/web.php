<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;

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

Route::get(
    '/',
    [NamaController::class, 'view']
)->name('viewall');

Route::get(
    '/addbook',
    [NamaController::class, 'viewcreateform']
)->name('viewform');

Route::post
('/namacreated', [NamaController::class, 'createnama']
)->name('create');

Route::get
('/formulirupdate/{id}', [NamaController::class, 'edit']
)->name('updateform');

Route::patch
('/updatedupdate/{id}', [NamaController::class, 'update']
)->name('updatenama');

Route::delete
('/deletee/{id}', [NamaController::class, 'delete']
)->name('delete');