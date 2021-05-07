@extends('layouts.app')

@section('titoloPagina', 'Dettaglio')

@section('content')
    <h1 class="dettaglio-space">{{$formato['titolo']}}</h1>
    <div class="home-banner-container-">
        <img class="home-banner-2" src="{{$formato['src-h']}}" alt="{{$formato['titolo']}}">
    </div>
    <div class="home-banner-container-">
        <img class="home-banner-2" src="{{$formato['src-p']}}" alt="{{$formato['titolo']}}">
    </div>

    <p class="dettaglio-space">
        <strong>{!! $formato['descrizione'] !!}</strong>
    </p>
    
@endsection