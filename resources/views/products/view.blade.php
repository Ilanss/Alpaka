<p><a href="{{ URL::route('products.index') }}">Retour</a></p>

<h1>{{$product->name}}</h1>

<p>{{$product->winery->name}}</p>
<p>{{$product->winery->country->name}}</p>

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