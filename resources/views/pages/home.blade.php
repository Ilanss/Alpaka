@extends('layouts.app')
@section('content')

<!--<modal-popup></modal-popup>
<login-form></login-form>
<signup-form></signup-form>
-->
<hero-section></hero-section>
<navbar-section catalogue="{{ route('products.index') }}" home="{{ route('home') }}" blog="{{ route('blog') }}" about="{{ route('about') }}" login="{{ route('auth') }}" register="{{ route('registration') }}"></navbar-section>
<slider-section></slider-section>
<promo-section></promo-section>
<product-card></product-card>
<brand-section></brand-section>

@endsection
