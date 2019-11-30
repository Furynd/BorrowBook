<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Transaction $transac)
    {
        $request->validate([
            "days" => "required",
            "is_cod" => "required",
            // "book_id" => "required"
        ]);

        $transac->create([
            "days" => $request->days,
            "is_cod" => $request->is_cod,
            "user_id" => auth()->user()->id,
            "book_id" => $request->book_id
        ]);

        return redirect('/book')->with('success', 'Buku Berhasil dipinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // $transaction = Transaction::find($id);
        // $transaction->delete(); 
        $transaction = DB::table('transactions')
                            ->join('books', 'books.id', '=', 'transactions.book_id')
                            ->where('transactions.user_id', auth()->user()->id)
                            ->select('transactions.id')
                            ->delete();
        
        return redirect('/book')->with('transaction', $transaction);
    }
}
