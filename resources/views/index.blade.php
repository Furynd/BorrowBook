@extends('layouts.base')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="jumbotron-heading">{{config('app.name')}}</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>
    <div id ="container mx-auto">
        <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner mx-auto">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card">
                                <img src="img/cover.png" alt="book cover" style="width:100%;height:auto;">
                                <div class="card-img-overlay">
                                    <div class="card-body">
                                        {{-- <a href="#"><h5 class="card-title">Judul Buku</h5></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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