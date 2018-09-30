@extends('layout.app')

@section('content')
<br>
<h1> Publiceer nieuwe werken. </h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method = "POST" action ="/arts">
    @csrf
   
    <div class="form-group">
        <label><h4>Naam werk</h4></label>
        <input type="text" class="form-control"  id="name" placeholder="Schattige panda.">
    </div>
    
    <div class="form-group">
      <label>Upload werk</label>
      <input type="file" id="picture">
    </div>
  
    <button type="submit" class="btn btn-primary">Publiceer</button>
  </form>


@endsection