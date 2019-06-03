<p><a href="{{ URL::route('products.index') }}">Retour</a></p>

<h1>{{$product->name}}</h1>

<p>{{$product->winery->name}}</p>


@foreach($product->foods as $food)
    <p>{{$food->food_name}}</p>
@endforeach