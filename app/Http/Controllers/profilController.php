<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;

class profilController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);
        $user = auth()->user();
        $city = City::findOrFail($user->city_id);
        return view('profil.show')->with(['user' => $user, 'city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $city = City::all();
        return view('profil.edit')->with(['city' => $city, 'user' => $user]);
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
        // Validate form (backend)
        $request->validate([
            "name" => "required|max:255",
            "email" => "required",
            "phone_number" => "required",
            "ktp_number" => "required",
            "address" => "required",
            'city_id'=> "required",
            'bank_number' => "required",
            "profile_picture" => "image|nullable|max:2999"
        ]);

        // Handle file upload
        if ($request->hasFile('profile_picture')) {
            // Get filename w/ ext
            $filenameWithExt = $request->file('profile_picture')->getClientOriginalName();
            // Filename wo/ ext
            $filename = \pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Ext
            $ext = $request->file('profile_picture')->extension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $ext;
            // Upload
            $path = $request->file('profile_picture')->storeAs('public/profile_pictures', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        // Product update
        $user = user::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->ktp_number = $request->ktp_number;
        $user->address = $request->address;
        $user->city_id = $request->city_id;
        $user->bank_number = $request->bank_number;        

        if ($request->hasFile('profile_picture')) {
            $user->profile_pictures = $filenameToStore;
        }

        $user->save();

        return profilController::show($user->id);
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
