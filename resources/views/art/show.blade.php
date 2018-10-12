@extends('layouts.app') 
@section('content')

<a class="btn btn-primary" href="/arts" role="button">Ga terug</a>
<h1> {{$art->name}} </h1>
<div>
    <img src="\img\{{$art->picture}}" alt="{{$art->name}}" height="700" width="auto"/><br>
</div>
<hr>
<small> uploaded:{{$art->created_at}}</small>
<hr>

@endsection