@extends('layouts.master')

@section('content')   
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sakib's Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/posts">Home</a>
                    </li>
                    <li>
                        <a href="/resume#about">About</a>
                    </li>
                    <li>
                        <a href="/resume">Resume</a>
                    </li>
                    <li>
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="/resume#contact">Contact</a>
                    </li>
					<li>
						<a href="/posts">Blog</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
    <title>Sakib's Blog</title>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
						{{ Form::open(array('action' => 'PostsController@store')) }}
						  <div class="form-group">
							{{ $errors->first('title', '<span class="help-block">:message</span>') }}
						    <label for="title">Title</label>
						    <input type="text" class="form-control" id="title" value="{{{ Input::old('title') }}}" name="title" placeholder="title" value="{{{ Input::old('title') }}}">
						  </div>
						  <div class="form-group">
							{{ $errors->first('content', '<span class="help-block">:message</span>') }}
						    <label for="body">Content</label>
						    <textarea rows="10" cols="50" type="text" class="form-control" id="body" value="{{{ Input::old('content') }}}" name="content">{{{ Input::old('body') }}}</textarea>
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						{{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop