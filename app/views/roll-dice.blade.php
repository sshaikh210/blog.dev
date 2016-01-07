@extends('layouts.master')

@section('content')
    <h1>You Rolled a {{{ $rand }}}!</h1>
 	<h1>You Guessed {{{$guess }}}!</h1>
	@if ($rand == $guess)
		<h2>"You Guessed Right!"</h2>
	@else
		<h2>"You Guessed Wrong!"</h2>
	@endif
@stop
