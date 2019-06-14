@extends('layouts.app')
@section('content')
@if (auth()->check())
@if(auth()->user()->isAdmin())
<h2>Vous êtes authentifié en compte admin</h2>
<a href="{{URL::to('/product/create')}}" type="button" class="btn-page">Ajouter un produit</a>
@else
<h2>Vous êtes authentifié</h2>
@endif
    
    <a href="{{URL::to('/auth/modify')}}" type="button" class="btn-page">Mettre à jour son profil</a>
    <a href="{{URL::to('/auth/logout')}}" type="button" class="btn-page">Logout</a>
@else
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inscription') }}</div>
                    <div class="card-body">
                        <div class="flex-center position-ref full-height">
                            <div class="top-right links">
                                <form method="GET" action="{{URL::to('/auth/login')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn-page">
                                                {{ __('Authentication') }}
                                            </button>
                                            <a href="{{ route('registration') }}" type="button" class="btn btn-primary btn-lg">Inscription</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @foreach ($errors->all(':message') as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
</div>
            @endif
            @endsection
