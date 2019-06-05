@extends('template')

@section('content')
    @if (auth()->check())
        @if(auth()->user()->isAdmin())
            <p><a href="{{ URL::route('products.index') }}">Retour</a></p>

            <h1>{{$product->name}}</h1>

            <p>{{$product->winery->name}}</p>

            <p>{{$product->country->name}}</p>

            @foreach($product->promotions as $promotion)
                <p>{{$promotion->discount}}</p>
            @endforeach

            @foreach($product->ratings as $rating)
                <p>{{$rating->comment}}</p>
                <p>{{$rating->user->username}}</p>
            @endforeach

            @foreach($product->foods as $food)
                <p>{{$food->name}}</p>
            @endforeach

            <p><a href="{{ URL::route('products.edit', $product->id) }}">Modifier le produit</a></p>
            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @else
            <p><a href="{{ URL::route('products.index') }}">Retour</a></p>

            <h1>{{$product->name}}</h1>

            <p>{{$product->winery->name}}</p>

            <p>{{$product->country->name}}</p>

            @foreach($product->promotions as $promotion)
                <p>{{$promotion->discount}}</p>
            @endforeach

            @foreach($product->ratings as $rating)
                <p>{{$rating->comment}}</p>
                <p>{{$rating->user->username}}</p>
            @endforeach

            @foreach($product->foods as $food)
                <p>{{$food->name}}</p>
            @endforeach
        @endif
    @endif
@endsection