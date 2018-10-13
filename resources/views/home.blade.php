@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                      @if(count($arts)>0)
                            
                            <h3> Jouw uploads.</h3>
                            <table class="table table-striped">
                                <tr>
                                    <td>Titel</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($arts as $art)
                                <tr>
                                        <td>{{$art->name}}</td>
                                        <td> <img src="\img\{{$art->picture}}" alt="uploaded pictures" height="100" width="auto"/></td>
                                        <td><a href="/arts/{{$art->id}}/edit" class='btn btn-default'>Edit</a></td>
                                        <td>
                                            {!!Form::open(['action'=> ['ArtsController@destroy',$art->id],'method'=>'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}} 
                                            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                            {!!Form::close() !!}</td>
                                        
                                </tr>
                                @endforeach
                            </table>
                            @else
                             <p>"Je hebt nog geen afbeeldingen geupload"</p>
                        @endif
                        <a href="/arts/create" class="btn btn-primary">Upload</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection