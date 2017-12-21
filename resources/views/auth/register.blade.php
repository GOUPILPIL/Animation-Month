@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="animation" class="col-md-4 control-label">Animation</label>

                            <div class="col-md-6">
                                <select class="form-control" name="animation" id="animation">
                                    <option>rightleft</option>
                                    <option>rubberBand</option>
                                    <option>rotateIn</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="choice" class="col-md-4 control-label">Choice</label>

                            <div class="col-md-6">
                                <select class="form-control" name="choice" id="choice">
                                    <option>Chuck norris</option>
                                    <option>Mes propres blagues</option>
                                </select>
                            </div>
                        </div>

                        <div id="joke-group">
                            @for($i = 1; $i <= 24; $i++)
                                <div class="form-group">
                                    <label for="joke-{{ $i }}" class="col-md-4 control-label">Case {{ $i }}</label>

                                    <div class="col-md-6">
                                        <input id="joke-{{ $i }}" type="text" class="form-control" name="joke-{{ $i }}">
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
