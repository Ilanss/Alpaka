@extends('layouts.app')
@section('content')
<navbar-section></navbar-section>
<div class="container">

<div class="row">

      <div class="col-lg-3">
        <filter-list-1 class="colsm-4"></filter-list-1>
        <filter-list-2 class="colsm-4"></filter-list-2>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
        <order-list class="col-sm-12 offset-sm-2"></order-list>
        @foreach($products as $product)
        <product-list products="{{$products}}" class="col-sm-12 offset-sm-2"></product-list>
        @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
</div>

@endsection

