@extends('layouts.blank')

@section('title', 'Login')

@section('content')

    <div class="row pt-5">
        <div class="col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-sm-10 col-md-8 col-lg-6">
	    <div class="row content">
	        <div class="col-sm-6">

                    <div class="mt-3">
                       <h1>Login</h1>
                    </div>
		    
                    <p class="lead">Sign in to your account.</p>

		    <form method="POST" action="/login">

		        {{ csrf_field() }}

                        <div class="form-group mb-4">
		            <div class="input-group{{ $errors->first('email') ? ' is-invalid' : '' }}">
			        <span class="input-group-addon" id="addon-envelope"><i class="fa fa-envelope"></i></span>
			        <input type="email" id="email" name="email" class="form-control"  aria-describedby="addon-envelope" placeholder="Email" value="{{ old('email') }}" autocomplete="on">
			    </div>
			    @if($errors->first('email'))
 	                      <small id="emailHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('email') }}</small>
                            @endif
			</div>

                        <div class="form-group mb-4">
		             <div class="input-group{{ $errors->first('password') ? ' is-invalid' : '' }}">
			         <span class="input-group-addon" id="addon-lock"><i class="fa fa-lock"></i></span>
			         <input type="password" id="password" name="password" class="form-control" aria-describedby="addon-lock" placeholder="Password" autocomplete="off">
			     </div>
			     @if($errors->first('password'))
 	                       <small id="passwordHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('password') }}</small>
                             @endif
			</div>

                        <div class="row pb-3">
	                    <div class="col-6">
                                <button type="submit" class="btn btn-primary px-4">Login</button>
			    </div>
                            <div class="col-6 text-right">
			        <a href="/password/request"  class="btn btn-link p-x-0">Forgot password?</a>
			    </div>
		        </div>
		    </form>

	        </div>
	        <div class="col-sm-6 text-center">

		    <div class="mt-3">
		        <h2>Need an account?</h2>
		    </div>
		    
 		    <p>If you dont have an account with us, you need to create one before you can login.  Use the button below to create your account and get started.</p>

		    <a href="/signup" class="btn btn-primary active mt-3">Register Now!</a>

	        </div>
	    </div>
	</div>
    </div>

@endsection