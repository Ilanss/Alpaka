@extends('layouts.app')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
<!--<modal-popup></modal-popup>
<login-form></login-form>
<signup-form></signup-form>
-->
<hero-section></hero-section>
<navbar-section catalogue="{{ route('products.index') }}" home="{{ route('home') }}" blog="{{ route('blog') }}" about="{{ route('about') }}" cart="{{ route('cart') }}" login="{{ route('auth') }}" modify="{{ route('auth.modify') }}" register="{{ route('registration') }}" search="{{ route('products.search') }}"></navbar-section>
<slider-section></slider-section>
<promo-section></promo-section>
<best-sellers base-url="{{URL::to('/')}}" v-bind:bestseller="{{$products}}"></best-sellers>
<brand-section></brand-section>

@endsection
