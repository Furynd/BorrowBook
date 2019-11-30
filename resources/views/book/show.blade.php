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
            @auth
                @if (auth()->user()->id == $book->user_id)
                    <div class="form-group">
                        <a href="/borrowBook/public/book/{{$book->id}}/edit" class="btn btn-success" role="button">Edit Buku</a>
                    </div>
                    
                @else
                    <div class="form-group">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Pinjam Buku</button>
                        {{-- <a href="/" class="btn btn-outline-warning mx-2">Cancel</a> --}}
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$book->book_name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form action="/borrowBook/public/transaction" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                                <div id ="container" class="mx-auto mt-3">
                                    <div class="row justify-content-center ">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="days">Lama Pinjam</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="days" class="form-control col-sm-9" id="days" required>
                                                <option value="3">3 hari</option>
                                                <option value="5">5 hari</option>
                                                <option selected value="7">7 Hari</option>
                                                <option value="10">10 hari</option>
                                                <option value="14">14 hari</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="col-md-4">
                                            <label for="is_cod">Pengiriman</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="is_cod" class="form-control col-sm-9" id="is_cod" required>
                                                <option value="0">Paket</option>
                                                <option value="1">COD</option>
                                            </select>
                                        </div>    
                                    </div>
                                    <div class="row justify-content-center ">
                                        <div class="col-md-4">
                                            <label for="harga">Harga</label>
                                        </div>
                                        <div class="col-md-2">
                                            {{($book->price)/10}}
                                        </div>    
                                    </div>
                                <input class="form-control" type="hidden" name="book_id" id="book_id" value="{{$book->id}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group">  
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
                                    <button type="submit" class="btn btn-primary">Pinjam</button>
                                </div>
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
                            </form>
                        </div>
                        </div>
                    </div>
                @endif
            @endauth
            
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