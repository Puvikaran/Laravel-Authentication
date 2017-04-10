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
                <h1>Forgotten Password</h1>

                <form method="POST" action="{{ url('/password/email') }}" accept-charset="UTF-8" class="form-vertical">
				{{ csrf_field() }}
                    <fieldset>
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

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default">Send Password Reset Link</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>



        </div>

    </main>

@endsection