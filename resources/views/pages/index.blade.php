@extends('layouts/app') 
@section('content')

    <h1>{{$title}}</h1>
    <p> Dit is mijn portfolio website.</p>
    <div class="card-body">
            <div class='container'>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel">
                            @component ('components.who')
                            @endcomponent
                            <p> Welkom </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

