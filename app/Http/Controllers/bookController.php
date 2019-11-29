<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Transaction;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('user_id', auth()->user()->id)
                        ->orderBy('author', 'desc')
                        ->get();
        $transactions = Transaction::where('user_id', auth()->user()->id)
                        ->get();
        $ids = array();
        foreach ($transactions as $key => $value) {
            array_push($ids,$value->book_id);
        }
        $borrows = Book::find($ids);
        
        return view('book.index')->with(['books' => $books, 'borrows' => $borrows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book)
    {

        $request->validate([
            "book_name" => "required|max:255",
            "author" => "required",
            "summary" => "required",
            "price" => "required|integer",
            "cover_picture" => "image|nullable|max:2999"
        ]);

        // Handle file upload
        if ($request->hasFile('cover_picture')) {
            // Get filename w/ ext
            $filenameWithExt = $request->file('cover_picture')->getClientOriginalName();
            // Filename wo/ ext
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Ext
            $ext = $request->file('cover_picture')->extension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $ext;
            // Upload
            $path = $request->file('cover_picture')->storeAs('public/cover_pictures', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $book->create([
            "book_name" => $request->book_name,
            "user_id" => auth()->user()->id,
            "author" => $request->author,
            "summary" => $request->summary,
            "price" => $request->price,
            "cover_pictures" => $filenameToStore,
        ]);

        return redirect('/book')->with('success', 'Buku Berhasil Dimuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
