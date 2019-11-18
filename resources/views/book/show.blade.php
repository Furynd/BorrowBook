@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
    <div class="row justify-content-center ">
        <div class="col-sm-2">
            <img src="" id="bookCover" class="" width="200px" />
            <div class="form-group float-left">
                <button type="button" href="" class="btn btn-primary">Edit Profile</button>
            </div>  
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="bookName" class="col-sm-3 col-form-label">Judul Buku</label>
                <input type="text" name="bookName" id="bookName" class="form-control col-sm-9" value="{{$book->name}}" readonly>
            </div>      
        </div>
    </div> 
</div>
@endsection