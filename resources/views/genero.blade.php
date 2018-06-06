@extends('layouts.plantilla')

@section('tituloPagina', $id)

@section('cuerpo')
@php ($contador=1)
    <div class="container">
        <div class="row">
        @for($i=0;$i<count($arrayJson["results"]);$i++)
            @if($contador==5)
                <div class="row">
                @php ($contador=1)
            @endif
            @php ($fecha = date_create($arrayJson["results"][$i]["release_date"]))
                <div class="col-md-3">
                    <div class="card mb-3 box-shadow" style="width: 18rem;">
                        <img class="card-img-top" height="100px" src="https://image.tmdb.org/t/p/w500/{{$arrayJson["results"][$i]["poster_path"]}}" alt="Sin carátula"> 
                        <div class="card-body">
                            <h5 class="card-title">{{($arrayJson["results"][$i]["title"])}}</h5>
                            <p class="card-text">Fecha de estreno:{{date_format($fecha, 'd/m/y')}}</p>
                            <a href="/pelicula/{{($arrayJson["results"][$i]["id"])}}" class="btn btn-primary">Más detalles</a>
                        </div>
                    </div>
                </div>
                    @php ($contador++)
                @if($contador==5)
                </div>   
                @endif
        @endfor
    </div>
</div>

@endsection