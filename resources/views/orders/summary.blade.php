@extends('layouts.app')

@section('content')
<div class="container-fluid yellow-bar relative">
        <h2 class="col-xs-12">MY CART<h2>
        <a href="{{ url('home') }}" class="home-link"><img src="{{ asset ('images/logo-small.png') }}" alt=""></a>
        <a href="{{ url('/logout')}}" class="logout-link">Log out</a>
</div>

<div class="row my_cart">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Order Summary</h2>
                 </div>
                
                <div class="panel-body">
                	<div class="col-xs-12">

                    Thank you for your order!

                    </div>                    
                </div>
            </div>
        </div>
</div>


@stop