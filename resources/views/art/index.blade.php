@extends('layouts.app')

@section('content')
<h1> Recente werken. </h1>

@if(count($arts)>0)
 @foreach($arts as $art)
  <div class = "well">
  <h3> <a href="/arts/{{$art->id}}">{{$art->name}}</a><h3>
  <img src="\img\{{$art->picture }}" /><br>
  <small> uploaded:{{$art->created_at}}</small>
 </div>
 @endforeach
 {{$arts->links()}}

@else
<p> Geen afbeeldingen gevonden....</p>
@endif
@endsection