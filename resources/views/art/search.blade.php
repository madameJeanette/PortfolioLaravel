@extends('layouts.app')

@section('content')

@if (count($arts) === 0)
<p>Geen afbeeldingen gevonden die voldoen aan de zoek term.</p>
@elseif (count($arts) >= 1)
 
    @foreach($arts as $art)
    <tr>
        <td><h3>{{$art->name}}</h3></td>
        <td> <img src="\img\{{$art->picture}}" alt="uploaded pictures" height="200" width="auto" /></td>
             
    </tr>
    @endforeach
@endif

@endsection