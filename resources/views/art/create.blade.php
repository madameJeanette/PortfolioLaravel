@extends('layout.app')

@section('content')
<br>
<h1> Upload nieuwe werken. </h1>
<hr>
<form>
    <div class="form-group">
        <label for="exampleInputFile"><h4>Naam werk</h4></label>
        <input type="text" class="form-control" placeholder="Schattige panda.">
    </div>
    
    <div class="form-group">
      <label for="exampleInputFile">Upload werk</label>
      <input type="file" id="exampleInputFile">
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>


@endsection