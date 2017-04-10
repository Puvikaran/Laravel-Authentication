@extends('layouts.app')

@section('content')
    <div id="alerts-container">

	    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
	
    </div>


    <main>

        <div class="container-fluid">
            <div class="container-fluid max-width-450">
                <h1>Set New Password</h1>
				
                    <form method="POST" action="{{ url('/password/reset') }}" class="form-vertical">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">                          
                            <label for="email" class="control-label required">Email address:</label>
                            <div class="form-group-inner">
                                <input class="form-control" name="email" type="text" id="email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label required">Password:</label>
                            <div class="form-group-inner">
                                <input class="form-control" name="password" type="password" value="" id="password" required>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label required">Confirm Password:</label>
                            <div class="form-group-inner">
                                <input class="form-control" name="password_confirmation" type="password" value="" id="password-confirm" required>
								@if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
 												<div class="form-group text-center">
                            <button type="submit" class="btn btn-default">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        
@endsection
