@extends('layouts.app')

@section('content')
<div class="container-fluid yellow-bar relative">
        <h2 class="col-xs-12">HOME<h2>
        <!-- <a href="{{ url('/logout') }}" class="logout-link">Log out</a> -->
               <a href="{{ url('/logout') }}" class="logout-link" 
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
</div>
<div class="container home inside-home">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <img src="{{ asset ('images/logo.png') }}" alt="Egg Cartel Logo" class="col-xs-6 col-xs-offset-3">
                        <div class="col-xs-12">
                            <h1>A BREAKFAST YOU CAN'T RESIST</h1>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-xs-12">
                        <a href="{{ url('orders/create') }}" class="btn btn-primary col-xs-12">Order Now</a>
                        <a href="{{ url('location') }}" class="btn btn-primary col-xs-12">Location</a>
                        <a href="{{ url('my_cart') }}" class="btn btn-primary col-xs-12">My Cart</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
