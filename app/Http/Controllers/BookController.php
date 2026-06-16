<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        //fetch records, pass to view
        //$books = Book::all();
        $books = Book::with('library')->orderBy("created_at","desc")->paginate(10);
        return view('Books.index', ["books" => $books]);
    }

    public function show($title, $id){
        //fetch one record and pass to show view
        $book = Book::with('library')->findOrFail($id);
        return view('Books.show', ['book'=> $book]);
    }
    public function create(){
        //create view (form)
        return view('Books.create');
    }
}
