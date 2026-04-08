@extends('layouts.app')
@section('header')

@endsection
@section('main')
    @include('layouts.landingnav')

    <form action="{{ route('addProd.store') }}" method="POST">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" placeholder="please enter Product name" required>

        <label for="category">Product category:</label>
        <input type="text" name="category" placeholder="please enter category " required>

         <label for="desc">Product category:</label>
        <input type="text" name="desc" placeholder="please enter description " required>

        <label for="stock">Product category:</label>
        <input type="number" name="stock" placeholder="please enter stock " required>

        

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