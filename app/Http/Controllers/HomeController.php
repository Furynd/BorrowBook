<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Transaction;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user() && auth()->user()->city_id != NULL) {
            $books = DB::table('books')
                    ->join('users', 'books.user_id', '=', 'users.id')
                    ->where('users.city_id', auth()->user()->city_id)
                    ->select('books.*')
                    ->get();
        }
        else{
            $books = Book::orderBy('author', 'desc')
                        ->take(12)
                        ->get();
        }
        return view('home')->with('books', $books);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $books = Book::all();
        $transactions = Transaction::all();
        $ids = array();
        foreach ($transactions as $key => $value) {
            array_push($ids,$value->book_id);
        }
        $borrows = Book::find($ids);
        
        return view('adminHome')->with(['books' => $books, 'borrows' => $borrows]);
    }
}
