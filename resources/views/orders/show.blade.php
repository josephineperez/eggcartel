@extends('layouts.app')

@section('content')

    <a href="{{ url('orders') }}" class="btn btn-default">Back</a>

        <div class="well">
            <h1>Order ID: {{ $order->id }}</h1>
            <p>


                <div class="well">
                    <h3>User info</h3>
                    {{ $order->user->name }} <br>
                    <a href="mailto:{{ $order->user->email }}" class="">{{ $order->user->email }}</a>
                </div>

                <div class="well">
                    <h3>Items</h3>
                    <!-- {{ $order->items }} <br> -->

                    @if (count($order->items) > 0)
                        @foreach ($order->items as $item)
                            
                            <!-- person -->
                            Name: {{ $item->for_person }} <br>

                            <!-- BASE -->
                            Base: {{ $item->base->name }}<br>
            
                           
                            <!-- Eggs -->
                            Eggs :
                             @if (count($item->eggs) > 0)
                                @foreach ($item->eggs as $egg)

                                {{ $egg->style }}<br>

                                @endforeach
                            @endif  
                            <br>



                            <!-- meats -->
                            Meats: 
                            @if (count($item->meats) > 0)
                                @foreach ($item->meats as $meat)

                                {{ $meat->name }}

                                @endforeach
                            @endif  
                            <br>


                        <!-- toppings -->
                            Topping: 
                            @if (count($item->toppings) > 0)
                                @foreach ($item->toppings as $topping)

                                {{ $topping->name }}

                                @endforeach
                            @endif  
                            <br>



                        <hr>
                        @endforeach
                    @endif    

                </div>
                 

              
            </p>
        </div>

@stop