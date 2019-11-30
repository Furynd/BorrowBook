@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Administrator</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <h4>Book List</h4>
                            <div class="card-deck">
                                @foreach($books as $book)
                                    <div class="card mb-3" style="min-width: 15rem; max-width: 15rem; min-height: 10rem;">
                                        <a href="/borrowBook/public/book/{{$book->id}}" style="text-decoration:none;" id="link-book-page"> 
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img class="card-img" src="/borrowBook/public/storage/cover_pictures/{{$book->cover_pictures}}" alt="{{$book->bookName}}" style="min-width: 5rem; max-width: 5rem; min-height: 8rem">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6 class="card-title text-dark text-truncate">{{$book->book_name}}</h5>
                                                    <p class="card-text text-dark text-truncate">{{$book->author}}</p>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text text-dark">Rp {{$book->price}}</h4>
                                        </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <h4>Borrowed Books</h4>
                            <div class="card-deck">
                                @foreach($borrows as $book)
                                    <div class="card mb-3" style="min-width: 15rem; max-width: 15rem;">
                                        {{-- <a href="/borrowBook/public/book/{{$book->id}}" style="text-decoration:none;" id="link-book-page">  --}}
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img class="card-img" src="/borrowBook/public/storage/cover_pictures/{{$book->cover_pictures}}" alt="{{$book->bookName}}" style="min-width: 5rem; max-width: 5rem;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6 class="card-title text-dark">{{$book->book_name}}</h5>
                                                    <p class="card-text text-dark text-truncate" style="max-width:200px">{{$book->summary}}</p>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <form action="/borrowBook/public/transaction/{{$book->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-warning">Delete</button>
                                                    </form>
                                                </div>
                                                <div class="col">
                                                    <a href="#" type="button" class="btn btn-success">view</a>
                                                </div>        
                                            </div>
                                            {{-- <p class="card-text text-dark">Rp {{$book->price}}</h4> --}}
                                        </div>
                                        {{-- </a> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
