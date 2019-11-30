@extends('layouts.base')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbotron-heading">{{config('app.name')}}</h1>
            <p>Borrow Book anywhere anytime.</p>
            {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> --}}
        </div>
    </div>
    <div id ="container mx-auto">
        <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner mx-auto">
                @foreach ($books as $book)
                    @if ($loop->index == 0)
                        <div class="carousel-item active">
                            <div class="row justify-content-center">                         
                    @endif
                    @if ($loop->index == 4 || $loop->index == 8)
                        <div class="carousel-item">
                            <div class="row justify-content-center"> 
                    @endif
                                <div class="col-sm-2">
                                    <a href="/borrowBook/public/book/{{$book->id}}" style="text-decoration:none;" id="link-book-page"> 
                                        <div class="card">
                                            <img class="card-img" src="/borrowBook/public/storage/cover_pictures/{{$book->cover_pictures}}" alt="book cover" style="min-width: 200px; max-width: 200px; min-height: 300px; max-height: 300px;">
                                            <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                                {{-- <div class="card-body">
                                                <a href="#"><h5 class="card-title">{{$book->book_name}}</h5></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>    
                    @if ($loop->index == 3 || $loop->index == 7 || $loop->last)
                            </div>    
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection