<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;

class BookController extends Controller
{
    public function index($id){
        $books = Book::all();
        $user = User::find($id);
        // $categories = Category::all();

        return view("home", compact("books", "user"));
    }

    public function show($id){
        $book = Book::find($id);
        return view("detail", compact("book"));
    }
}
