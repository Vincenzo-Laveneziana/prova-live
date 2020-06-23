@extends('layouts/main')

@section('content')
    <h2>Detail of product {{ $product->name }}</h2>
    <p>Description: {{ $product->description }}</p>
    <p>Cost: {{ $product->price }} $</p>
    <br>
    <h3>Reviews</h3>
    @foreach ( $product->reviews as $review)
        <h4>{{ $review->title }}</h4>
        <p>{{ $review->body }}</p>
        @if (! $loop->last)
        <hr>
        @endif
    @endforeach
@endsection