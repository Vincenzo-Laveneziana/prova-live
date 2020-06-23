@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <div class="create-product">
        <h1>Create new product</h1>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Product name...">
            </div>
            
            <div class="group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Insert new price...">
            </div>
            
            <div class="group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" placeholder="Describe the product...">
            </div>

            <input type="submit" value="Confirm">
        </form>
    </div>
@endsection