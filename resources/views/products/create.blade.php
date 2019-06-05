@extends('template')

@section('content')
    @if (auth()->check())
        @if(auth()->user()->isAdmin())
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form method="post" action="{{ route('products.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="brand">Brand :</label>
                    <input type="text" class="form-control" name="brand"/>
                </div>
                <div class="form-group">
                    <label for="winery">Winery :</label>
                    <select name="winery_id" id="winery_id">
                        @foreach($wineries as $winery)
                            <option value="{{$winery->id}}">{{$winery->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Category :</label>
                    <select name="category_id" id="">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="country">Country :</label>
                    <select name="country_id" id="">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price_wine">Wine price :</label>
                    <input type="text" class="form-control" name="price_wine"/>
                </div>
                <div class="form-group">
                    <label for="origin">Origin :</label>
                    <input type="text" class="form-control" name="origin"/>
                </div>
                <div class="form-group">
                    <label for="size">Size :</label>
                    <input type="text" class="form-control" name="size"/>
                </div>
                <div class="form-group">
                    <label for="varietal">Varietal :</label>
                    <input type="text" class="form-control" name="varietal"/>
                </div>
                <div class="form-group">
                    <label for="good_year">Good Year :</label>
                    <input type="text" class="form-control" name="good_year"/>
                </div>
                <div class="form-group">
                    <label for="date_production">Date production :</label>
                    <input type="text" class="form-control" name="date_production"/>
                </div>
                <div class="form-group">
                    <label for="serv_temp">Serving temperature :</label>
                    <input type="text" class="form-control" name="serv_temp"/>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <div class="form-group">
                    <label for="stock_status">Stock status :</label>
                    <input type="text" class="form-control" name="stock_status"/>
                </div>
                <div class="form-group">
                    <label for="conditioning">Conditioning :</label>
                    <input type="text" class="form-control" name="conditioning"/>
                </div>
                <div class="form-group">
                    <label for="ranking">Ranking :</label>
                    <input type="text" class="form-control" name="ranking"/>
                </div>
                <div class="form-group">
                    <label for="alcohol_level">Alcohol level :</label>
                    <input type="text" class="form-control" name="alcohol_level"/>
                </div>
                <div class="form-group">
                    <label for="slug">Slug :</label>
                    <input type="text" class="form-control" name="slug"/>
                </div>
                <div class="form-group">
                    <label for="delivery_delay">Delivery delay :</label>
                    <input type="text" class="form-control" name="delivery_delay"/>
                </div>
                <button type="submit" class="btn btn-primary">Create Wine</button>
            </form>
        @else
            <h2>Accès refusé</h2>
        @endif
    @endif
@endsection