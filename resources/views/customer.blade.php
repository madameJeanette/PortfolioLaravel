@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CUSTOMER Dashboard</div>

                <div class="card-body">
                    <div class='container'>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel">
                                    @component ('components.who') @endcomponent
                                    <p> U bent ingelogt als klant. </p>
                                    <p> Laatste login {{auth()->user()->login_latest}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection