<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\profilController;
use App\Http\Controllers\AdminController;

Route::get('products', [ProductController::class, 'index'])->name('products.index');


Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('products/{id}', [ProductController::class, 'show']);

Route::get('profil', [ProfilController::class, 'index']);

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});
