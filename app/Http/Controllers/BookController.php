<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Library;

class BookController extends Controller
{
    public function index(){
        //fetch records, pass to view
        //$books = Book::all();
        $books = Book::with('library')->orderBy("created_at","desc")->paginate(10);
        return view('books.index', ["books" => $books]);
    }

    public function show($title, $id){
        //fetch one record and pass to show view
        $book = Book::with('library')->findOrFail($id);
        return view('books.show', ['book'=> $book]);
    }
    public function create(){
        //create view (form)
        $libraries = Library::all();
        return view('Books.create', ['libraries' => $libraries]);
    }

    public function store(Request $request){
       //validates form data
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'percent' => 'required|integer|min:0|max:100',
        'description' => 'required|string|min:1|max:1000',
        'library_id' => 'required|exists:libraries,id'
        ]);
        Book::create($validated);
        return redirect()->route('books.index')->with('success', 'Book Added!');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        $libraries = Library::all();
        return view('books.edit', ['book' => $book, 'libraries'=> $libraries]);
    }

    public function update(Request $request , $id){
        $book = Book::findOrFail($id);
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'percent' => 'required|integer|min:0|max:100',
        'description' => 'required|string|min:1|max:1000',
        'library_id' => 'required|exists:libraries,id'
       ]);
       $book->update($validated);
       return redirect()->route('books.index')->with('success', 'Book Details Edited!');
    }

    public function destroy($title, $id){
       $book = Book::findOrFail($id);
       $book->delete();
       return redirect()->route('books.index')->with('success', "Book Deleted!");
    }
}
