@extends('layout.app')

@section('content')

<a class="btn btn-primary" href="/arts" role="button">Ga terug</a>
<h1> {{$art->name}} </h1>
 <div>
    <img src="\img\{{$art->picture}}" /><br>
 </div>
 <hr>
 <small> uploaded:{{$art->created_at}}</small>
 <hr>
<a href="/arts/{{$art->id}}/edit/" class="btn btn-default">Edit</a>
{!!Form::open(['action'=> ['ArtsController@destroy', $art->$id],'method'=>'POST','class'=> 'pull-right' ])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
{!!Form::close() !!}
 @endsection