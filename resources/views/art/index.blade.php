@extends('layout.app')

@section('content')
<h1> Recente werken. </h1>
@if(count($arts)>1)
 @foreach($arts as $art)
  <div class = "well">
  <h3> {{$art->name}}<h3>
  <img src="img/{{$art->picture }}" /><br>
  <small> uploaded:{{$art->created_at}}</small>
 </div>

 @endforeach
@else
<p> Geen afbeeldingen gevonden....</p>
@endif
@endsection