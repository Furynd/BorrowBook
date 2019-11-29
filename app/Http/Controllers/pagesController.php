<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class pagesController extends Controller
{
    public function index(){
        $books = Book::orderBy('author', 'desc')
                        ->take(12)
                        ->get();
        return view('home')->with('books', $books);
    }
}
