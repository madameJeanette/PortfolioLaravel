@extends('layouts.app') 
@section('content')
<br>
<a class="btn btn-primary" href="/arts" role="button">Ga terug</a>

<h1> {{$art->name}} </h1>
<div>
    <img src="\img\{{$art->picture}}" alt="{{$art->name}}" height="700" width="auto"/><br>
</div>
<hr>
<small> geupload: {{$art->created_at}} door {{$art->user->name}}</small>
<hr>
@if(!Auth::guest())
 @if(Auth::user()->id== $art->user_id)
   <a href="/arts/{{$art->id}}/edit" class='btn btn-default'>Edit</a>

   {!!Form::open(['action'=> ['ArtsController@destroy',$art->id],'method'=>'POST'])!!}
   {{Form::hidden('_method', 'DELETE')}} 
   {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
   {!!Form::close() !!}</td>
   @endif
 @endif
@endsection