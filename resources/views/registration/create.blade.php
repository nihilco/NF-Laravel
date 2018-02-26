@extends('layouts.blank')

@section('title', 'Register')

@section('content')

    <div class="row pt-5">
        <div class="col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-sm-10 col-md-8 col-lg-6">
	    <div class="row content">
	        <div class="col-sm-6 text-center">
                    <div class="mt-3">
		        <h2>Already registered?</h2>
		    </div>
		    
	            <p>If you already have an account with us, please use the link below to sign-in.</p>
	            <a href="/login" class="btn btn-primary active mt-3">Login Now!</a>
	        </div>
	        <div class="col-sm-6">

                    <div class="mt-3">
                       <h1>Register</h1>
                    </div>
		    
                    <p class="lead">Create an account.</p>

		    <form method="POST" action="/register">

		        {{ csrf_field() }}

			<div class="form-group">
			    <div class="input-group{{ $errors->first('name') ? ' is-invalid' : '' }}">
			        <span class="input-group-addon" id="addon-address"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
			        <input type="text" id="name" name="name" class="form-control" aria-describedby="addon-address" placeholder="Name" value="{{ old('name') }}" autocomplete="on" autofocus>		               
			    </div>
			    @if($errors->first('name'))
 	                      <small id="nameHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('name') }}</small>
	                    @endif
			</div>

                        <div class="form-group">
		            <div class="input-group{{ $errors->first('username') ? ' is-invalid' : ''}}">
			        <span class="input-group-addon" id="addon-user"><i class="fa fa-user"></i></span>
			        <input type="text" id="username" name="username" class="form-control" aria-describedby="addon-user" placeholder="Username" value="{{ old('username') }}" autocomplete="on">
			    </div>
			    @if($errors->first('username'))
 	                      <small id="usernameHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('username') }}</small>
	                    @endif
			</div>

                        <div class="form-group">
		            <div class="input-group{{ $errors->first('email') ? ' is-invalid' : '' }}">
			        <span class="input-group-addon" id="addon-envelope"><i class="fa fa-envelope"></i></span>
			        <input type="email" id="email" name="email" class="form-control"  aria-describedby="addon-envelope" placeholder="Email" value="{{ old('email') }}" autocomplete="on">
			    </div>
			    @if($errors->first('email'))
 	                      <small id="emailHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('email') }}</small>
	                    @endif
			</div>

                        <div class="form-group">
		             <div class="input-group{{ $errors->first('password') ? ' is-invalid' : '' }}">
			         <span class="input-group-addon" id="addon-lock"><i class="fa fa-unlock-alt"></i></span>
			         <input type="password" id="password" name="password" class="form-control" aria-describedby="addon-lock" placeholder="Password" autocomplete="off">
			     </div>
			     @if($errors->first('password'))
 	                       <small id="passwordHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('password') }}</small>
	                     @endif
			</div>

                        <div class="form-group">
		            <div class="input-group{{ $errors->first('password_confirmation') ? ' is-invalid' : '' }}">
			        <span class="input-group-addon" id="addon-lock"><i class="fa fa-lock"></i></span>
			        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" aria-describedby="addon-lock" placeholder="Confiirm Password" autocomplete="off">
			    </div>
			    @if($errors->first('password_confirmation'))
 	                      <small id="passwordConfirmationHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('password_confirmation') }}</small>
	                    @endif
			</div>

			<div class="form-group">
		            <div class="input-group{{ $errors->first('birthday') ? ' is-invalid' : '' }}">
			        <span class="input-group-addon" id="addon-calendar"><i class="fa fa-calendar"></i></span>
			        <input type="birthday" id="birthday" name="birthday" class="form-control" aria-describedby="addon-calendar" placeholder="Birthday" value="{{ old('birthday') }}" autocomplete="off">
			    </div>
			    @if($errors->first('birthday'))
 	                      <small id="birthdayHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('birthday') }}</small>
	                    @endif
			</div>

			<div class="form-group">
			  <div class="form-check{{ $errors->first('agreed') ? ' is-invalid' : '' }}">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox" name="agreed"{{ old('agreed') ? ' checked' : '' }}> I agree with the <a href="#">terms</a>
			    </label>
			  </div>
			  @if($errors->first('agreed'))
 	                    <small id="agreedHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('agreed') }}</small>
                          @endif
			</div>
						      
                        <div class="row pb-3">
	                    <div class="col-6"></div>
                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-primary px-4">Register</button>
			    </div>
		        </div>
		    </form>

	        </div>
	    </div>
	</div>
    </div>

@endsection