@extends('layouts.app')

@section('titoloPagina', 'prodotti')
    
@section('content')
    <div class="container">

        @foreach ($formati as $tipo => $formato)
                <h1>{{$tipo}}</h1>
        

        <div class="cards-container">
            
            @foreach ($formato as $key => $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    <a href="{{route('pagina-dettagli', ['id' => $key])}}">
                        <div class="layover">
                            <p>{{$pasta['titolo']}}</p>
                        </div>
                    </a>
                </div>                
            @endforeach
            
        </div>
        @endforeach
    </div>
@endsection