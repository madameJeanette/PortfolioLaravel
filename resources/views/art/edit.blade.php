@extends('layout.app')

@section('content')

<h1> Bewerk afbeelding. </h1>
<hr>
{!! Form::open(['action' => ['ArtsController@update', $art->id], 'method'=>'POST']) !!}
 <div class="form-group">
        {{Form::label('name', 'Titel')}}
        {{Form::text('name', $art->name, ['class'=>'form-control'])}}

 </div>  
 
 <div class='form-group'>
        {{Form::label('picture', 'Bestand')}}
        {{$art->picture}}
        {{Form::file('picture')}}
      
 </div> 
 {{Form::hidden('_method','PUT')}} 
 {{Form::submit('Publiceer', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection