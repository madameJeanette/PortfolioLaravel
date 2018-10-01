@extends('layout.app')

@section('content')

<h1> Publiceer nieuwe werken. </h1>
<hr>
{!! Form::open(['action' => 'ArtsController@store', 'method'=>'POST']) !!}
 <div class="form-group">
       {{Form::label('name', 'Titel')}}
       {{Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'Titel werk'])}}

 </div>  
 
 <div class='form-group'>
        {{Form::label('picture', 'Bestand')}}
        {{Form::file('image')}}
      
       </div>  
{!! Form::close() !!}
@endsection