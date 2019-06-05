@extends('template')

@section('content')
    <h1>Tous les vins</h1>

    @foreach($products as $product)
        <h2><a href="{{ URL::action("ProductsController@view", $product->slug) }}"> {{$product->name}} </a></h2>

    @endforeach
@endsection