@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">

         <h1 class="page-title">Toys  <a href="{{ route('toys.create') }}" class="btn btn-primary">Add new</a></h1>

         <div class="row">
        @if (count($toys) > 0)
            @foreach ($toys as $toy)
                <div class="col-xs-12">
                    <div class="well">
                        <h3>{{ $toy->name }}</h3>
                        <a href="{{ route('toys.show',[$toy->id]) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('toys.edit',[$toy->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                'route' => ['toys.destroy', $toy->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-primary')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @else
        <h2>Yo you got no toys. Maybe you should make one...</h2>
                  
        @endif
        </div>

    </div>
</div>
@stop


