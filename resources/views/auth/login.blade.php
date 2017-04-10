@extends('layouts.app')

@section('content')

    <div id="alerts-container">

    </div>


    <main>

        <div class="container-fluid">
            <div class="container-fluid max-width-450">
                <h1>Log in</h1>

                <form method="POST" action="{{ url('login') }}" class="form-vertical">
				{{ csrf_field() }}
                    <fieldset>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">                          
                            <label for="email" class="control-label required">Email address:</label>
                            <div class="form-group-inner">
                                <input id="email" class="form-control" name="email" type="text" id="email" value="{{ old('email') }}" required autofocus>
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
                                <input id="password" class="form-control" name="password" type="password" value="" id="password" required>
                              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
			<div class="form-group">
                            
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default" id="btn">Login</button>
                            <br/>
                            <br/>
                            <span class="help-block">Don't have an account? <a href="{{ url('register') }}">Register</a></span>
                            <span class="help-block">Forgotten password? <a href="{{ url('/password/reset') }}">Reset your password</a></span>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>



        </div>

    </main>
@endsection

@section('script')
<script src="{{ asset('js/AjaxLogin.js') }}"></script>
<script>
  /*AL = new Login({
            email:"email",
            password:"password",
            btn:"btn",
            url:"/login",
            successUrl:"/",
            mode:"toast" ///alert or toast
        });
        AL.doneLogin = function(){
            alert('login');
        };
        AL.errorLogin = function (error) {
            console.log(error)
        };*/
</script>
@endsection