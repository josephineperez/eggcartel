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
                		<h3>Breakfast Bowl (<sup>$</sup>6)</h3>
                        <h4>Scrambled Eggs, No Cheese, Veggie Sausage, Hash Browns, Mushrooms, Arugula</h4>
                        <a>Edit Meal</a> <a class="remove">Remove</a><hr>
                        <h5>Tax <span>Calculated at checkout</span></h5>
                        <h3>Subtotal <span><sup>$</sup>6.00</span></h3>
                	</div>
                </div>
            </div>
        </div>
</div>

<div class="row my_cart">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Pay at Restaurant</h2>
                 </div>
                
                <div class="panel-body">
                	<div class="col-xs-12">
                		<h3 class="bold">Your order will be ready within 10 minutes once placed. You will pay at the restaurant</h3>
                	</div>
                </div>
            </div>
        </div>
</div>

<div class="container-fluid">
    <div class="row white-bg my_cart text-center">
        <a href="{{ url('orders/create') }}" class="btn btn-success">+ Add Another Meal</a>
        <a href="{{ url('orders/confirmation') }}" class="btn btn-primary col-xs-12">Place Order Now</a>
    </div>
</div>

@stop