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
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <p class="card-text">Lingua: {{ $movie->language }}</p>
                            <a href="{{ route('movies.index')}}" class="btn btn-primary">Torna indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
