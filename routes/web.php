<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/show', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
Route::post('/publisher/store', [PublisherController::class, 'store'])->name('publisher.store');
Route::delete('/publisher/destroy/{publisher}', [PublisherController::class, 'destroy'])->name('publisher.destroy');
Route::get('/publisher/show', [PublisherController::class, 'show'])->name('publisher.show');
Route::get('/publisher/edit/{publisher}', [PublisherController::class, 'edit'])->name('publisher.edit');
Route::post('/publisher/update/{publisher}', [PublisherController::class, 'update'])->name('publisher.update');





// Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
// Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
// Route::get('/book', [BookController::class, 'index'])->name('book.index');
// Route::get('/book/destroy', [BookController::class, 'destroy'])->name('book.destroy');
// Route::get('/book/show', [BookController::class, 'show'])->name('book.show');
// Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
// Route::post('/book/update/{book}', [BookController::class, 'update'])->name('book.update');
