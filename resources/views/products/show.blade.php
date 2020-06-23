@extends('layouts/main')

@section('content')
    @if (session('product_saved'))
        <div class="alert">
            <span>Prodotto creato con successo: </span>{{ session('product_saved') }}
        </div>
    @endif

    <h2>Detail of product {{ $product->name }}</h2>
    <p>Description: {{ $product->description }}</p>
    <p>Cost: {{ $product->price }} $</p>
    <br>

    <h3>Reviews</h3>
    @forelse ($product->reviews as $review)
        <h4>{{ $review->title }}</h4>
        <p>{{ $review->body }}</p>
        @if (! $loop->last)
        <hr>
        @endif
    @empty
        <p>No reviews</p>
    @endforelse
@endsection