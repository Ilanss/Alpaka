@extends('layouts.app')
@section('content')
<!--<navbar-section></navbar-section>-->
<div class="container">

<div class="row">

      <div class="col-lg-12">
        <product-info v-bind:product="{{$product}}" v-bind:country="{{$country}}" v-bind:winery="{{$winery}}" v-bind:category="{{$category}}" v-bind:promotions="{{$promotions}}" v-bind:ratings="{{$ratings}}" class="colsm-12"></product-info>
        @if (auth()->check())
        @if(auth()->user()->isAdmin())
<a class="btn-page" type="submit" href="{{ URL::route('products.edit', $product->id) }}">Modifier le produit</a>
            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button  class="btn-page" type="submit">Delete</button >
            </form>

@else

@endif
@endif
      </div>
      
      <!-- /.col-lg-9 -->
      <best-sellers v-bind:bestseller="{{$products}}" ></best-sellers>
<product-card></product-card>

    </div>
</div>

@endsection

