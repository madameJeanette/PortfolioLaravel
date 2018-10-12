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
                    <h3> Jouw kunst. <h3>
                      @if(count($arts)>0)
                            <a href="/arts/create" class="btn btn-primary">Upload</a>
                            <table class="table table-striped">
                                <tr>
                                    <th>Title </th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                                @foreach($arts as $art)
                                <tr>
                                        <th>{{$art->title}} </th>
                                        <th><a href="/arts/{{$art->id}}/edit" class='btn btn-default'>Edit</a></th>
                                        <th> </th>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection