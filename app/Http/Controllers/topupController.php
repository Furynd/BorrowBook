<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topup;

class topupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.topup');
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
    public function store(Request $request, Topup $topup)
    {

        $request->validate([
            "transfer_picture" => "image|required|max:2999"
        ]);
        // Get filename w/ ext
        $filenameWithExt = $request->file('transfer_picture')->getClientOriginalName();
        // Filename wo/ ext
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Ext
        $ext = $request->file('transfer_picture')->extension();
        // Filename to store
        $filenameToStore = $filename . '_' . time() . '.' . $ext;
        // Upload
        $path = $request->file('transfer_picture')->storeAs('public/transfer_pictures', $filenameToStore);

        $topup->create([
            "user_id" => auth()->user()->id,
            "transfer_pictures" => $filenameToStore,
        ]);

        return redirect('/profil')->with('success', 'Bukti Topup Berhasil Dimuat');

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
        //
    }
}
