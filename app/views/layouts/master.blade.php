<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
	<link href="/color/default.css" rel="stylesheet">

	@yield('top-script')
</head>
<body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/resume">
                    <h1>Sakib Shaikh</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="/resume">Resume</a></li>
        <li><a href="/resume#about">About Me</a></li>
        <li><a href="/resume#service">Services</a></li>
        <li><a href="/posts">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
        @if (Auth::user())
        <li><a href="{{{ action('HomeController@getLogout')}}}">Log Out</a></li>
        <li><a href="{{{ action('PostsController@create')}}}">Create Post</a></li>
        @else
        <li><a href="{{{ action('HomeController@getLogin')}}}">Log In</a></li>
        @endif
{{--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li> --}}
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	@yield('content')
	{{-- Script tags for jQuery and Bootstrap --}}
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>	
	<script src="/js/jquery.scrollTo.js"></script>
	<script src="/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.js"></script>
	@yield('bottom-script')
</body>
</html>