@extends('template')

@section('content')
    @guest
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <form method="GET" action="{{URL::to('auth')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <a href="{{URL::to('/registration') }}">{{ __('S\'inscrire') }}</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-6 offset-md-4">
            <form method="GET" action="{{URL::to('/logout')}}">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <a href="{{URL::to('/logout') }}">{{ __('Déconnexion') }}</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                <a href="{{URL::to('/modify') }}">{{ __('Modifier mes informations') }}</a>
            </button>
        </div>
    @endguest
@endsection
>>>>>>> backend_modInfos
