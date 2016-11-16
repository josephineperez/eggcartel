@extends('layouts.app')

@section('content')
<div class="container-fluid yellow-bar">
        <h2 class="col-xs-12">SIGN IN<h2>
</div>
<div class="container home register">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="row">
                        <img src="{{ asset ('images/logo.png') }}" alt="Egg Cartel Logo" class="col-xs-6 col-xs-offset-3">
                        <div class="col-xs-12">
                            <h1>A BREAKFAST YOU CAN'T RESIST</h1>
                        </div>
                    </div>


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary col-xs-12">
                                    Login
                                </button>
                            </div>

                            <div class="col-xs-12">
                                <a href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
