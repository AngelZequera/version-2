@extends('layouts.app')

@section('content')
    @if (Auth::check() &&
        (Auth::user()->role == 'admin' ||
            Auth::user()->role == 'rh' ||
            Auth::user()->role == 'redes' ||
            Auth::user()->role == 'cta'))
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center">{{$area->sede ." - ". $area->edificio ." - ". $area->piso ." - ". $area->area}}</h3>
                    <hr class="border border-dark">
                    <p class="text-center"><b>Ultimo Inventario:</b>  {{$area->ultimo_inventario}} / <b>Tipo de Espacio:</b>  {{$area->tipo_espacio}}</p>                    
                </div>

            </div>
            <div class="row justify-content-center">
                @foreach ($equipo as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 w-100 ">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->tipo_equipo}} - {{ $item->modelo }}</h5>  
                                <hr class="border border-primary">                              
                                <p class="card-text">{{$item->numero_serie}}</p>
                                <p class="card-text">{{$item->detalles}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        Acceso No válido
    @endif
@endsection
