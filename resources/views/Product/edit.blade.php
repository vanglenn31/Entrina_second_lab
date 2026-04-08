@extends('layouts.app')
@section('header')

@endsection
@section('main')
    @include('layouts.landingnav')

    <form action="{{ route('addProd.store') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" value=" {{ old('product_name', $posts->product_name) }}" required>

        <label for="category">Product category:</label>
        <input type="text" name="category" value=" {{ old('category', $posts->category) }} required>

         <label for="desc">Product category:</label>
        <input type="text" name="desc" value=" {{ old('desc', $posts->desc) }} required>

        <label for="stock">Product category:</label>
        <input type="number" name="stock" value=" {{ old('stock', $posts->stock) }} required>

        

        <button type="submit">Submit</button>
    </form>
     @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection