@extends('layout.app')

@section('content')
<br>
<h1> Upload nieuwe werken. </h1>

<form>
    <div class="form-group">
        <label for="exampleInputFile">Naam</label>
        <input type="text" class="form-control" placeholder="Naam">
    <div class="form-group">
      <label for="exampleInputFile">Upload werk</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>


@endsection