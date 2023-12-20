@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <main>
        <h1 class="text-center mt-3 text-info ">{{ $movie->title }}</h1>
        <section class="container">
            <div class="row">
                <div class="col-12 gy-3">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
