@extends('layouts.app')
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
            <create-section 
            v-bind:countries="{{$countries}}"
             v-bind:wineries="{{$wineries}}"
             v-bind:categories="{{$categories}}"
             v-bind:size="{{$size}}"
             v-bind:varietal="{{$varietal}}"
             v-bind:conditioning="{{$conditioning}}">
             </create-section>
        @else
            <h2>Accès refusé</h2>
        @endif
        @else
            <h2>Accès refusé</h2>
        @endif
        @endsection