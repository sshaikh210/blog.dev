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
                    	@if (Session::has('successMessage'))
					        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
					    @endif
					    @if (Session::has('errorMessage'))
					        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
					    @endif
                    	{{ Form::open(array('action'=> 'HomeController@postLogin', 'method'=> 'POST')) }}
                    	<h1>Enter Username: </h1>
                    	{{ Form::text('username', null, array('class'=>'form-control'))}}
                    	<h1>Enter Password: </h1>
						{{ Form::password('password', array('class'=>'form-control'))}}
						<button class="btn btn-lg btn-info" type="submit">Submit</button>
						{{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop