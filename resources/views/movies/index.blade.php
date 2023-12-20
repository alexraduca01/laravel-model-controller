@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <main>
        <h1 class="text-center mt-3 text-info ">Movies</h1>
        <section class="container">
            <div class="row">
                @foreach ($movies as $item)
                <div class="col-6 gy-3">
                    <div class="card">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->original_title }}</p>
                            <a href="{{ route('movies.show', $item->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
