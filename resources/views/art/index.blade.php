@extends('layouts.app')

@section('content')
<h1> Recente werken. </h1>

@if(count($arts)>0)
 @foreach($arts as $art)
  <div class = "well">
  <h3> <a href="/arts/{{$art->id}}">{{$art->name}}</a><h3>
  <img src="\img\{{$art->picture }}" alt="{{$art->name}}" height="500" width="auto" /><br>
  <small> geupload: {{$art->created_at}} door {{$art->user->name}}</small>
 </div>
 @endforeach
 {{$arts->links()}}

@else
<p> Geen afbeeldingen gevonden....</p>
@endif
@endsection