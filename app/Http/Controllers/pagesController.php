<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
    public function index(){
        // $users = User::where('city_id', auth()->user()->city_id)
        //                 ->get();

        // $ids = array();
        // foreach ($users as  $value) {
        //     array_push($ids,$value->id);
        // }

        // $books = Book::where('user_id','in',$ids)->orderBy('author', 'desc')
        //                 ->take(12)
        //                 ->get();
        if (auth()->user() != NULL && auth()->user()->city_id != NULL) {
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
}
