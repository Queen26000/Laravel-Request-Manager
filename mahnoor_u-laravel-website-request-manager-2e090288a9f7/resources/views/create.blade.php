@extends('layouts.app')

@section('content')

<div class="container">
    <h2> Insert new item </h2>
    <form action="{{ url('/request') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="text">Text</label>
        <input type="text" class="form-control" name="text" id="text" placeholder="Enter text">
      </div>

      <div class="form-group">
        <label for="text">Body</label>
        <input type="text" class="form-control" name="body" id="body" placeholder="Enter body">
      </div>
      <button type="submit" name="button" class="btn btn-primary"> Submit</button>

    </form>
</div>
@endsection
