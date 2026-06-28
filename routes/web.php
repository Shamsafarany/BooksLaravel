<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//authenitcation routes
Route::middleware('guest')->group(function(){
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function(){
    //shows list of all books
    Route::get('/books', [BookController::class ,'index'])->name('books.index');
    //displays create form
    Route::get('books/create', [BookController::class, 'create'])->name('books.create'); 
    //saves new book to database
    Route::post('/books', [BookController::class,'store'])->name('books.store');
    //displays edit form
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    //updates book details
    Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
    //shows details for one book
    Route::get('/books/{title}/{id}', [BookController::class, 'show'])->name('books.show');
    //deletes one book
    Route::delete('/books/{title}/{id}', [BookController::class, 'destroy'])->name('books.destroy');
});

//group controllers
//Route::middleware('auth')->controller(BookController::class)->group(function(){
//})



