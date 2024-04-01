@extends('layouts.app')
@section('title') create @endsection
@section('content')

<form method="POST" action="{{route('posts.store',1)}}">
@csrf
@method('put')
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input name="tiitle" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name ="description" class="form-control" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label">Post Creator</label>
    <select name="post creator" class="form-control" >
        <option value="1">arwa</option>
        <option value="2">mohamed</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

@endsection