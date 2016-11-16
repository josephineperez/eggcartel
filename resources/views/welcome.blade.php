@extends('layouts.app')

@section('content')
<div class="row home bg-texture">
	<div class="col-xs-12 text-center">

		<img src="{{ asset('images/logo.png') }}" alt="Egg Cartel Logo" class="col-xs-8 col-xs-offset-2">

		<div class="col-xs-12">
			<h1>A BREAKFAST YOU CAN'T RESIST</h1>
			<a href="{{ url('register') }}" class="btn btn-primary btn-lg col-xs-12">Create an Account</a>
			<a href="{{ url('login') }}" class="btn btn-danger btn-lg col-xs-12">Sign In</a>
		</div>

	</div>
</div>

@stop