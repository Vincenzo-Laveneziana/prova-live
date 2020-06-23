@extends('layouts.main')

@section('content')

{{-- @dump($products) --}}

  <section>
    <ul class="products">

      @foreach($products as $product)
        <li class="item-box">

          <ul>
            <li class="item">
              nome: {{ $product->name }}
            </li>
            <li class="item">
              price: {{ $product->price }}
            </li>
            <li class="item">
              description: {{ $product->description }}
            </li>
            <li>
              <a href="{{ route('product.show', $product->id) }}">Dettaglio</a>
            </li>
          </ul>

        </li>
      @endforeach
    </ul>
  </section>


@endsection