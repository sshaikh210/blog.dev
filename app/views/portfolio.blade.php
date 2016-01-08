@extends('layouts.master')

@section('content')
	<h1>Portfolio</h1>
	    <ul class="nav navbar-nav">
	    	<li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
	    </ul>
@stop