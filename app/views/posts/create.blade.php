@extends('layouts.master')

@section('content')   
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
    <title>Sakib's Blog</title>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
						{{ Form::open(array('action' => 'PostsController@store')) }}

						  <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
							{{ $errors->first('title', '<span class="help-block">:message</span>') }}
							{{ Form::label('title', 'Title') }}
						    {{ Form::text('title') }}
						  </div>

						  <div class="form-group">
							{{ $errors->first('content', '<span class="help-block">:message</span>') }}
							{{ Form::label('content', 'Content') }}
						    <textarea rows="10" cols="50" type="text" class="form-control" id="body" value="{{{ Input::old('content') }}}" name="content">{{{ Input::old('content') }}}</textarea>
						  </div>

						  <button type="submit" class="btn btn-default">Submit</button>
						{{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop