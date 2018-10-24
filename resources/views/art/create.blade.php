@extends('layouts.app')

@section('content')

<h1> Publiceer nieuwe werken. </h1>
<hr>
{!! Form::open(['action' => 'ArtsController@store', 'method'=>'POST', 'enctype'=> 'multipart/data' ]) !!}
 <div class="form-group">
       {{Form::label('name', 'Titel')}}
       {{Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Titel werk'])}}

 </div>  
 
 <div class='form-group'>
        {{Form::label('picture', 'Bestand')}}
        {{Form::file('picture')}}
      
 </div>  
 {{Form::submit('Publiceer', ['class'=> 'btn btn-primary'])}}
 {!! Form::close() !!}
@endsection