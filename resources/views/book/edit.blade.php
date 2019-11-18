@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
    <form action="/book" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="bookName" class="col-sm-3 col-form-label">Nama</label>
                <input type="text" name="bookName" id="bookName" class="form-control col-sm-9" value="{{$user->name}}">
                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-3 col-form-label">E-mail</label>
                    <input type="text" name="userEmail" class="form-control col-sm-9" id="userEmail" value="{{$user->email}}">
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