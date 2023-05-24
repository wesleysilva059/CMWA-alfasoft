<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::prefix('contacts')->group( function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');

    Route::middleware('auth')->group( function () {
        Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
        Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/show/{id}', [ContactController::class, 'show'])->name('contact.show');
        Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('/update', [ContactController::class, 'update'])->name('contact.update');
        Route::delete('/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    });
});
