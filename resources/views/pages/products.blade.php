@extends('layouts.app')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<!--<navbar-section></navbar-section>-->
<cover-section></cover-section>
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
        <product-list v-bind:products="{{$products}}" class="col-sm-12 offset-sm-2"></product-list>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
</div>

@endsection

