@extends('layouts.app')
@section('header')

@endsection
@section('main')
    @include('layouts.landingnav')
    <h2>Products</h2>


@foreach ($products as $product)
    <div style="border:1px solid black; padding:10px; margin:10px;">
        <h4>{{ $product->product_name }}</h4>
        <p>Category: {{ $product->category }}</p>
        <p>Description: {{ $product->description }}</p>
        <p>Stock: {{ $product->stock }}</p>

        <a href="{{ route('products.edit', $product->id) }}">Edit</a>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection