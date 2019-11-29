@extends('layouts.base')
@section('content')
<div id ="container" class="mx-auto mt-3">
    <div class="row justify-content-center ">
        <div class="col-sm-2">
            <img src="../storage/cover_pictures/{{$book->cover_pictures}}" id="bookCover" class="" width="200px" />
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="book_name">Judul Buku</label>
                <input type="text" name="book_name" id="book_name" value="{{$book->book_name}}" class="form-control mb-2" readonly>
    
                <label for="author">Pengarang</label>
                <input type="text" name="author" id="author" value="{{$book->author}}" class="form-control mb-2" readonly>
                
                <label for="price">Harga Beli</label>
                <input type="text" name="price" value="{{$book->price}}" class="form-control mb-2" id="price" readonly>   
            </div>
    
            <div class="form-group">
                <label for="summary">Sinopsis</label>
                <textarea name="summary" class="form-control" id="summary" cols="30" rows="5" placeholder="{{$book->summary}}"></textarea>
            </div>
    
            <div class="form-group">
                <button class="btn btn-success">Edit Buku</button>
                {{-- <a href="/" class="btn btn-outline-warning mx-2">Cancel</a> --}}
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
</div>
@endsection