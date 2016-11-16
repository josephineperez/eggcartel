@extends('layouts.app')

@section('content')
   <a href="{{ url('cats') }}" class="btn btn-default">Back</a>

    <h1 class="page-title">Create New Toy</h1>
   
    {!! Form::open(['method' => 'POST', 'route' => ['toys.store'], 'files' => true,]) !!}
      
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop

