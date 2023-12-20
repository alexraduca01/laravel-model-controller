@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <main>
        <h1 class="text-center mt-3 text-info ">Books</h1>
        <section class="container">
            <div class="row">
                @foreach ($books as $item)
                <div class="col-6 gy-3">
                    <div class="card">
                        <img src="{{ $item->cover_image }}" class="card-img-top" style="height: 900px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <a href="{{ route('books.show', $item->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
