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
                                    <th>Titel</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($arts as $art)
                                <tr>
                                        <th>{{$art->name}} </th>
                                        <th> <img src="\img\{{$art->picture}}" alt="uploaded pictures" height="100" width="auto"/></th>
                                        <th><a href="/arts/{{$art->id}}/edit" class='btn btn-default'>Edit</a></th>
                                        <th><a href="/arts/{{$art->id}}/delete" class='btn btn-default'>Delete</a></th>
                                </tr>
                                @endforeach
                            </table>
                            @else
                             <p>"You have no posts"</p>
                        @endif
                        <a href="/arts/create" class="btn btn-primary">Upload</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection