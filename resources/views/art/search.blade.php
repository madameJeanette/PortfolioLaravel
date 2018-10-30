@extends('layouts.app') 
@section('content')
<h1> Zoek resultaten </h1>

<div class="row">
    <div class="col-md-6">


    </div>
    <div class="col-md-6">
        {{ Form::open(['action' => 'QueryController@index', 'method' => 'POST']) }}
        Sort:
        
       {!! Form::select('filterOptions', array('created_desc' => 'nieuwste', 
       'created_asc' => 'oudste',
       'name_asc' => 'A-Z',
       'name_desc' => 'Z-A'
       )); !!}
       
        {{-- <a href="{{ route('queries.index', ['created_at' => request('created_at'), 'created_at' =>  'asc'])}}">Oudste</a>  |
        <a href="{{ route('queries.index', ['created_at' => request('created_at'), 'created_at' =>  'desc'])}}">Nieuwste</a>  |
        <a href="{{ route('queries.index', ['name' => request('name'), 'sort' =>  'asc'])}}">A-Z</a> |
        <a href="{{ route('queries.index', ['name' => request('name'), 'sort' =>  'desc'])}}">Z-A</a> | --}}
        <button>Submit</button>
        {{ Form::close() }}  
        
        
    </div>
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