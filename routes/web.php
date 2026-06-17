<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

//shows list of all books
Route::get('/books', [BookController::class ,'index'])->name('books.index');
//shows form to add
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
//saves new book to database
Route::post('/books', [BookController::class,'store'])->name('books.store');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
//shows details for one book
Route::get('/books/{title}/{id}', [BookController::class, 'show'])->name('books.show');
//deletes one book
Route::delete('/books/{title}/{id}', [BookController::class, 'destroy'])->name('books.destroy');


