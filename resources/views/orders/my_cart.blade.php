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

                    @foreach($order->items  as $item)

                        <h3><strong>
                        @if($item->for_person )
                             {{ $item->for_person }}
                        @endif
                        </strong></h3>

                        <h3>
                        @if($item->base )
                             Breakfast {{ $item->base->name }}
                        @endif 


                        @if($item->base )
                             (<sup>$</sup>{{ $item->base->price }})
                        @endif
                        </h3>

                        <h4>
                        @if($item->eggs )
                             {{ $item->eggs[0]->style }} Eggs,
                        @endif  
                        
                        @if($item->cheeses )
                             {{ $item->cheeses[0]->name }},
                        @endif

                        @if($item->meats )
                             {{ $item->meats[0]->name }},
                        @endif  

                        @if($item->toppings )
                        @foreach($item->toppings  as $topping)
                           
                                 {{ $topping->name }}
                           
                        @endforeach
                        @endif
                        </h4>  

                        <hr>  


                    @endforeach

                    <!-- <a>Edit Meal</a> <a class="remove">Remove</a><hr> -->
                    <h5>Tax <span>Calculated at checkout</span></h5>
                    <h3>Subtotal <span>
                        @if($item->base )
                             <sup>$</sup>{{ $item->base->price }}.00
                        @endif
                    </span></h3>


                    {!! Form::model($order, ['method' => 'POST', 
                    'route' => ['orders.processing', $order->id] ]) !!}

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
    {!! Form::submit('Place Order Now', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}


        </a>
    </div>
</div>

@stop