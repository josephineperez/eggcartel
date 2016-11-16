@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
         <h1 class="page-title">Orders </h1>

         <a href="{{ route('orders.create') }}" class="btn btn-primary">Make a new order</a>
       
         <div class="row">
        @if (count($orders) > 0)
            @foreach ($orders as $order)
                <div class="col-xs-12">
                    <div class="well">
                        <h3>{{ $order->id }}</h3>
                        <a href="{{ route('orders.show',[$order->id]) }}" class="btn btn-primary">View</a>
                        {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("Are you sure you want to delete this order?")."');",
                                'route' => ['orders.destroy', $order->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            @endforeach
        @else
        <h2>No order have been placed.</h2>
                  
        @endif
        </div>

    </div>
</div>
@stop


