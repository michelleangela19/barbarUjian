<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function show($id, $idCategory){
        // $books = Book::where("category_id", "=", $id)->get();
        $books = Category::find($idCategory)->Book;
        $user = User::find($id);
        // $categories = Category::all();

        return view("home", compact("books", "user"));
    }
}
