@extends('layouts.plantilla')

@section('tituloPagina', $pelicula->title)

@section('cuerpo')
<h3>{{$pelicula->title}} ({{$pelicula->release_date}})</h3>
<p>
    {{$pelicula->runtime}}&#39; |
    @foreach ($pelicula->genres as $genre)
        @if ($genre === end($pelicula->genres))
            <a href="/genero/{{$genre["id"]}}">{{$genre["name"]}}</a>
        @else
            <a href="/genero/{{$genre["id"]}}">{{$genre["name"]}}</a>,
        @endif    
    @endforeach | 
    <a target='_blank' href='{{$pelicula->imdb_id}}'>IMDB</a> | 
    <a target='_blank' href='{{$pelicula->homepage}}'>Página Oficial</a>

</p>
<p>
        Inversión: {{$pelicula->budget}}$ || Ingresos: {{$pelicula->revenue}}$
</p>
<table>
    <tr>
        <td><img src="{{$pelicula->poster_path}}" height="405px" style="vertical-align: baseline;"></td>
        @if ($pelicula->trailer!=null)
        <td>
                <iframe width="720" height="405" src="{{$pelicula->trailer}}?rel=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>    
        </td>
        @endif
        <td>
            
            Popularidad: {{$pelicula->popularity}}<br/>
            Valoración Media: {{$pelicula->vote_average}}<sub>/10</sub><br/>
        </td>
    
    </tr>

</table>
<hr>
{{$pelicula->overview}}
@endsection