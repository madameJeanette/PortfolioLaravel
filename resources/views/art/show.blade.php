@extends('layout.app')

@section('content')
<a class="btn btn-primary" href="/arts" role="button">Ga terug</a>

<h1> {{$art->name}} </h1>
 <div>
    <img src="\img\{{$art->picture }}" /><br>
 </div>
 <hr>
 <small> uploaded:{{$art->created_at}}</small>
@endsection