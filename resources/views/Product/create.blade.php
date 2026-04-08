@extends('layouts.app')
@section('header')

@endsection
@section('main')
    @include('layouts.landingnav')

    @if(session('success'))
    <div style="color:green; border:1px solid green; padding:10px; margin-bottom:10px;">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('addProd.store') }}" method="POST">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" placeholder="please enter Product name" required><br>

        <label for="category">Product category:</label>
        <input type="text" name="category" placeholder="please enter category " required><br>

         <label for="desc">Product Description:</label>
        <input type="text" name="desc" placeholder="please enter description " required><br>

        <label for="stock">Product Stock:</label>
        <input type="number" name="stock" placeholder="please enter stock " required><br>

        

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