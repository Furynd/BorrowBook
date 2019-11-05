@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
    <form action="/profil" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="userName" class="col-sm-3 col-form-label">Nama</label>
                <input type="text" name="userName" id="userName" class="form-control col-sm-9" value="{{$user->name}}">
                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-3 col-form-label">E-mail</label>
                    <input type="text" name="userEmail" class="form-control col-sm-9" id="userEmail" value="{{$user->email}}">
                </div>
                <div class="form-group row">
                    <label for="userPhone" class="col-sm-3 col-form-label">No. Telp</label>
                    <input type="text" name="userPhone" class="form-control col-sm-9" id="userPhone" value="{{$user->phone_number}}">
                </div>
                <div class="form-group row">
                    <label for="userKTP" class="col-sm-3 col-form-label">No. KTP</label>
                    <input type="text" name="userKTP" class="form-control col-sm-9" id="userKTP" value="{{$user->ktp_number}}">
                </div>
                <div class="form-group row">
                    <label for="userAddress" class="col-sm-3 col-form-label">Alamat</label>
                    <input type="text" name="Address" class="form-control col-sm-9" id="Address" value="{{$user->address}}">
                </div>
                <div class="form-group row">
                    <label for="kotaName" class="col-sm-3 col-form-label">Kota</label>
                    {{-- <select name="kotaName" class="form-control" id="kotaName" required> --}}
                        {{-- <option selected>{{$user->city}}</option>
                        @foreach ($city as $citya)
                            <option value="{{$citya->id}}">{{$citya->name}}</option>
                        @endforeach
                    </select> --}}
                    <input name="kotaName" class="form-control col-sm-9" id="kotaName" value="{{$user->city_id}}">
                </div>
                <div class="form-group row">
                    <label for="userBank" class="col-sm-3 col-form-label">No. Rekening</label>
                    <input type="text" name="userBank" class="form-control col-sm-9" id="userBank" value="{{$user->bank_number}}">
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-warning">Confirm</button>
                </div> 
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div> 
    </form>
</div>
@endsection