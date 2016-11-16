@extends('layouts.app')

@section('content')
    <a href="{{ url('toys') }}" class="btn btn-default">Back</a>
    <div class="well">
        <h1>{{ $toy->name }}</h1>
        <p>{{ $toy->description }}</p>
    </div>
@stop