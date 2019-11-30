@extends('layouts.base')

@section('content')
    @if (!Auth::guest())
        
    @endif
    
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h4>My Book</h4>
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
                <a class="btn btn-success" href="./book/create" role="button">Add</a>
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
                            <form action="/borrowBook/public/transaction/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Return</button>
                            </form>
                                {{-- <p class="card-text text-dark">Rp {{$book->price}}</h4> --}}
                            </div>
                            {{-- </a> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection