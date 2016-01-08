@extends('layouts.master')

@section('content')
<form role="form" method="POST" action="{{{ action('PostsController@store') }}}">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="title" value="{{{ Input::old('title') }}}">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" value="{{{ Input::old('body') }}}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop