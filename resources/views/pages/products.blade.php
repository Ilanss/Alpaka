@extends('layouts.app')
@section('content')
<navbar-section></navbar-section>
<div class="container">
<order-list class="col-sm-12 offset-sm-2"></order-list>
<div class="row">
     <!--<product-list class="col-sm-12 offset-sm-2"></product-list>-->
    <filter-list-1 class="colsm-4"></filter-list-1>
</div>
<div class="row">
    <filter-list-2 class="colsm-4"></filter-list-2>
</div>
</div>

@endsection