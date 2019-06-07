    @if (auth()->check())
        <div class="col-md-6 offset-md-4">
            <form method="GET" action="{{URL::to('/auth/logout')}}">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Déconnexion') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 offset-md-4">
            <form method="GET" action="{{URL::to('/auth/modify')}}">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Modifier mes informations') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <a href="{{URL::to('/auth') }}">{{ __('Se connecter') }}</a>
                        </button>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            <a href="{{URL::to('/registration') }}">{{ __('S\'inscrire') }}</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
