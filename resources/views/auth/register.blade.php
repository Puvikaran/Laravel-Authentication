@extends('layouts.app')

@section('content')
    <div id="alerts-container">

    </div>


    <main>

        <div class="container-fluid">
            <div class="container-fluid max-width-450">
                <h1>Register</h1>

               <form method="POST" action="{{ url('register')}}" accept-charset="UTF-8" class="form-vertical">
			         {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group ">

                            <label for="name" class="control-label required {{ $errors->has('name') ? ' has-error' : '' }}">Full name:</label>
                            <div class="form-group-inner">
                                <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}" required autofocus>
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label required">Email address:</label>
                            <div class="form-group-inner">
                                <input class="form-control" name="email" type="text" id="email" value="{{ old('email') }}" required>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label required">Password:</label>
                                    <div class="form-group-inner">
                                        <input class="form-control" name="password" type="password" value="" id="password">
                                    </div>
									@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label for="password_confirmation" class="control-label required">Confirm password:</label>
                                    <div class="form-group-inner">
                                        <input class="form-control" name="password_confirmation" type="password" value="" id="password-confirm" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default">Register</button>
                            <span class="help-block">Have an account? <a href="{{ url('login') }}">Log in</a></span>
                        </div>
                    </fieldset>

               </form>

            </div>
        </div>



        </div>

    </main>

@endsection