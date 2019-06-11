@extends('layouts.app')
@section('content')
<!--<navbar-section></navbar-section>-->
<div class="container">

<div class="row">

      <div class="col-lg-12">
        <product-info v-bind:product="{{$product}}" class="colsm-12"></product-info>
      </div>
      <!-- /.col-lg-9 -->

    </div>
</div>

@endsection

