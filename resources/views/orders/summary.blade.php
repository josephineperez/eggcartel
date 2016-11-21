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

                    <h3><strong>Thank you for your order!</strong></h3>

                    <h3>Your order will be ready within 10 minutes. <br>You will pay at the restaurant.</h3>

                    </div>                    
                </div>
            </div>
        </div>
</div>

<div class="row create location">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Address</h2>
                 </div>
                
                <div class="panel-body">
                    <div class="col-xs-12">
                        <h3>7159 Olympia Ave<br>
                            Los Angeles, CA</h3>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row create location">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Phone Number</h2>
                 </div>
                
                <div class="panel-body">
                    <div class="col-xs-12">
                        <h3>(818) 219-4305</h3>
                    </div>
                </div>
            </div>
        </div>
</div>



@stop