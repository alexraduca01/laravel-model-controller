@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <main>
        <h1>Movies</h1>
    </main>
    <ul>
    @foreach ($movies as $item)
        <li>{{ $item->title }}</li>
    @endforeach
    </ul>
@endsection
