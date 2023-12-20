@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <main>
        <h1 class="text-center mt-3 text-info ">{{ $book->title }}</h1>
        <section class="container">
            <div class="row">
                <div class="col-12 gy-3">
                    <div class="card">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ $book->plot }}</p>
                            <a href="{{ route('books.index') }}" class="btn btn-primary">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
