@extends('template')

@section('content')
    <h1>Tous les vins</h1>

    <form method="get" action="{{ route('products.search') }}">
        <div class="form-group">
            @csrf
            <label for="search">Search:</label>
            <input type="text" class="form-control" name="search" />
        </div>
        <button type="submit" class="btn btn-primary">Search Wine</button>
    </form>
    @foreach($products as $product)
        <h2><a href="{{ URL::action("ProductsController@view", $product->slug) }}"> {{$product->name}} </a></h2>
        <img src="{{ url("/images/products") }}/{{$product->image}}" />

    @endforeach
@endsection