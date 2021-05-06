@extends('layouts.app')

@section('titoloPagina', 'prodotti')
    
@section('content')
    <div class="container">
        <div class="cards-container">
            @foreach ($paste as $pasta)
            <div class="card">
                <img src="{{$pasta['src']}}" alt="">
                <div class="layover">
                    <p>{{$pasta['titolo']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection