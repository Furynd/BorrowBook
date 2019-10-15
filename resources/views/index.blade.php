@extends('layouts.base')
@section('content')
    <div class="flex-center position-ref full-height">
        <section class="jumbotron text-center">
            <div class="container">
                <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="jumbotron-heading">{{config('app.name')}}</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            </div>
        </section>
    </div>
@endsection