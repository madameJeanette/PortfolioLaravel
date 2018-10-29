@extends('layouts.app') 
@section('content')
<h1> Zoek resultaten </h1>

<div class="row">
    <div class="col-md-6">

        Filter:
        <a href="{{ route('queries.index', ['created_at' => request('created_at'), 'created_at' =>  'asc'])}}">Newest</a>        |
        <a href="{{ route('queries.index', ['created_at' => request('created_at'), 'created_at' =>  'desc'])}}">Oldest</a>        |
        <a href="/">Reset</a> |

    </div>
    <div class="col-md-6">
        Sort:
        <a href="{{ route('queries.index', ['name' => request('name'), 'sort' =>  'asc'])}}">Ascending</a> |
        <a href="{{ route('queries.index', ['name' => request('name'), 'sort' =>  'desc'])}}">Descending</a> |

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
    <hr>
    <small> geupload: {{$art->created_at}} door {{$art->user->name}}</small>
    <hr>
</tr>
@endforeach @endif
@endsection