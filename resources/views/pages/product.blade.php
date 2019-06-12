@extends('layouts.app')
@section('content')
<!--<navbar-section></navbar-section>-->
<div class="container">

<div class="row">

      <div class="col-lg-12">
        <product-info v-bind:product="{{$product}}" v-bind:country="{{$country}}" v-bind:winery="{{$winery}}" v-bind:category="{{$category}}" v-bind:promotions="{{$promotions}}" v-bind:ratings="{{$ratings}}" class="colsm-12"></product-info>
      </div>
      
      <!-- /.col-lg-9 -->
      <best-sellers v-bind:bestseller="{{$products}}" ></best-sellers>
<product-card></product-card>
    </div>
</div>

@endsection

