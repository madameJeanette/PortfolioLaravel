@extends('layouts.app') 
@section('content')
<h1> Zoek resultaten </h1>

<div class="row">
  
</div>
    <div class="col-md-6">
        {{ Form::open(['action' => 'QueryController@index', 'method' => 'POST']) }} <!-- Form for dropdown filter-->
         Filter: 
         {!! Form::select('filterOptions',array(
           'taart' => 'Taarten' ,             //filter on pies
           'panda' => "Panda's" ,             //filter on panda.
          
         )); !!}


        <button>Submit</button> {{ Form::close() }}  
    </div>


<hr> @if (count($arts) === 0)
<p>Geen afbeeldingen gevonden die voldoen aan de zoek term.</p>
@elseif (count($arts) >= 1) @foreach($arts as $art)
<tr>
    <td>
        <h3>{{$art->name}}</h3>
    </td>
    <td> <img src="\img\{{$art->picture}}" alt="uploaded pictures" height="200" width="auto" /></td>
    <br>
    <small> geupload: {{$art->created_at}} door {{$art->user->name}}</small>

</tr>


@endforeach 

@endif
@endsection