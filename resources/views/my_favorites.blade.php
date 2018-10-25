@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                
                <h2>Mijn favorieten</h2>
            </div>
            @forelse ($myFavorites as $myFavorite)
                <div class="panel panel-default">
                    <div class="panel-heading">
                     <h4>   {{ $myFavorite->name }}</h4>
                    </div>

                    <div class="panel-body">
                        <img src="\img\{{ $myFavorite->picture }}" alt="uploaded pictures" height="300" width="auto" /></td> 
                    </div>
                    @if (Auth::check())
                        <div class="panel-footer">
                            <favorite
                                :art={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
            @empty
                <p>You have no favorite posts.</p>
            @endforelse
         </div>
    </div>
</div>
@endsection