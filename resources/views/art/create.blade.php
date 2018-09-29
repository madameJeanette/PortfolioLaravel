@extends('layout.app')

@section('content')
<br>
<h1> Publiceer nieuwe werken. </h1>
<hr>
<form method = "POST" action ="/arts">
    @csrf
   
    <div class="form-group">
        <label for="exampleInputFile"><h4>Naam werk</h4></label>
        <input type="text" class="form-control" placeholder="Schattige panda.">
    </div>
    
    <div class="form-group">
      <label for="exampleInputFile">Upload werk</label>
      <input type="file" id="exampleInputFile">
    </div>
  
    <button type="submit" class="btn btn-primary">Publiceer</button>
  </form>


@endsection