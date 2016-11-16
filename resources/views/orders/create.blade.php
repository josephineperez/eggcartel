@extends('layouts.app')

@section('content')
<div class="container-fluid yellow-bar relative">
        <h2 class="col-xs-12">CREATE YOUR BREAKFAST<h2>
        <a href="{{ url('home') }}" class="home-link"><img src="{{ asset ('images/logo-small.png') }}" alt=""></a>
        <a href="{{ url('/logout')}}" class="logout-link">Log out</a>
</div>

{!! Form::open(['method' => 'POST', 'route' => ['orders.store'], 'files' => true,]) !!}

<div class="row create">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Choose </h2>
                 </div>
                
                <div class="panel-body">

<div class="tab-content">


<div role="tabpanel" class="tab-pane active" id="p1">

        <div class="radio">
            @foreach($bases as $base)
            <label>
                <input type="radio" name="base" id="optionsRadios1" value="{{ $base->id }}" class="hide">
                    <img src="{{ asset ('images/'.$base->name .'.png') }}" alt="Base Icon">
                     {{ $base->name }} (${{ $base->price }})
                     <a class="btn btn-success relative">
                     <span class="plus-position">+</span>
                     </a>
              </label><hr>
            @endforeach
        </div>

    <a href="#p2" data-toggle="tab" class="btn btn-primary col-xs-12">Continue</a>
</div>

<div role="tabpanel" class="tab-pane" id="p2">

        <div class="radio">
            @foreach($eggs as $egg)
            <label>
                <input type="radio" name="egg" id="optionsRadios2" value="{{ $egg->id }}" class="hide">
                <img src="{{ asset ('images/'.$egg->style .'.png') }}" alt="Egg Icon">
                {{ $egg->style }}
                <a class="btn btn-success">+</a>
              </label><hr>
            @endforeach
        </div>
<!--         <a href="#p1" data-toggle="tab" class="btn btn-primary col-xs-6">Back</a> -->
        <a href="#p3" data-toggle="tab" class="btn btn-primary col-xs-12">Continue</a>
</div>

<div role="tabpanel" class="tab-pane" id="p3">
        <div class="radio">
            @foreach($cheeses as $cheese)
            <label>
                <input type="radio" name="cheese" id="optionsRadios3" value="{{ $cheese->id }}" class="hide">
                {{ $cheese->name }}
                <a class="btn btn-success">+</a>
              </label><hr>
            @endforeach
        </div>

        <!-- <a href="#p2" data-toggle="tab" class="btn btn-default">Previous</a> -->
        <a href="#p4" data-toggle="tab" class="btn btn-primary col-xs-12">Continue</a>
</div>

<div role="tabpanel" class="tab-pane" id="p4">
        <div class="radio">
            @foreach($meats as $meat)
            <label>
                <input type="radio" name="meat" id="optionsRadios4" value="{{ $meat->id }}" class="hide">
                <img src="{{ asset ('images/'.$meat->name .'.png') }}" alt="Sandwich Icon">
                {{ $meat->name }}
                <a class="btn btn-success">+</a>
              </label><hr>
            @endforeach
        </div>

        <!-- <a href="#p3" data-toggle="tab" class="btn btn-default">Previous</a> -->
        <a href="#p5" data-toggle="tab" class="btn btn-primary col-xs-12">Continue</a>
</div>

<div role="tabpanel" class="tab-pane" id="p5">
        <div class="radio">
            @foreach($toppings as $topping)
            <label>
                <input type="checkbox" name="topping" id="optionsRadios5" value="{{ $topping->id }}" class="hide">
                {{ $topping->name }}
                <a class="btn btn-success">+</a>
              </label><hr>
            @endforeach
        </div>

       <div class="col-xs-12 form-group">
            {!! Form::label('for_person', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('for_person', old('for_person'), ['class' => 'form-control', 'placeholder' => '']) !!}
            <p class="help-block"></p>
            @if($errors->has('for_person'))
                <p class="help-block">
                    {{ $errors->first('for_person') }}
                </p>
            @endif
        </div>


        {!! Form::submit('Submit', ['class' => 'btn btn-primary col-xs-12']) !!}
    {!! Form::close() !!}

                    </div>
            </div>
        </div>
</div>

</div>


</div>



    
@stop

