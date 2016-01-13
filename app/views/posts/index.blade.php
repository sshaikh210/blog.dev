@extends('layouts.master')

@section('top-script')

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
                    	<a href="/posts/create">Create Entry</a>
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
                        <h1>Sakib's Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Blog About Sakib's Daily Observations</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="show">
						<div class="container">
							    @if (Session::has('successMessage'))
							        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
							    @endif
							    @if (Session::has('errorMessage'))
							        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
							    @endif
								@foreach ($posts as $post)
								<h1><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h1>
								<p>{{{$post->content }}}</p>
							@endforeach
						</div>
							{{ $posts->links() }}
                    </a>
                    
	                <hr>
	                <!-- Pager -->
	            </div>
	        </div>
	    </div>
	</div>
    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

@stop