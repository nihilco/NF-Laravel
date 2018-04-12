@extends('layouts.admin')

@section('title', 'Edit Case')

@section('content')

    <div class="container page-top">

        <div class="row">
	    <div class="col-sm-12">

                <h1 class="pt-3">Edit Case</h1>

                <p class="lead">Use the form to edit a case.</p>

		<form method="POST" action="{{ $clientCase->path() }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}

		    <div class="row">
		      <div class="col-sm-6">

		        <div class="form-group">
    		          <label for="customer">Client</label>
			  <div class="input-group mb-3">
        		    <select class="form-control{{ $errors->first('client') ? ' is-invalid' : '' }}" id="client" name="client">
			      <option></option>
			      @foreach($clients as $client)
			      <option value="{{ $client->id }}"{{ ($client->id == $clientCase->client_id) ? ' selected="selected"' : '' }}>{{ $client->name }}</option>
			      @endforeach
			    </select>

		            <div class="input-group-append">
                              <!--<a href="/clients/create" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></a>-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createClientModal"><i class="fas fa-plus"></i></button>                
			    </div>
			  </div>
			
			  @if($errors->first('client'))
	                  <small id="clientHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('client') }}</small>
	                  @endif
			</div>
		      </div>

		      <div class="col-sm-6">

                    <div class="form-group">
      	                <label for="name">Date of Incident</label>
                        <input type="text" class="form-control{{ $errors->first('doi') ? ' is-invalid' : '' }}" id="doi" name="doi" aria-describedby="doiHelp" value="{{ $clientCase->date_of_incident }}">
	                @if($errors->first('doi'))
	                <small id="doiHelp" class="invalid-feedback">{{ $errors->first('doi') }}</small>
	                @endif
	            </div>

		      </div>
		    </div>

		    <div class="row">
		      <div class="col-sm-6">

                    <div class="form-group">
      	                <label for="county">County</label>
                        <input type="text" class="form-control{{ $errors->first('county') ? ' is-invalid' : '' }}" id="county" name="county" aria-describedby="countyHelp" value="{{ $clientCase->county }}">
	                @if($errors->first('county'))
	                <small id="countyHelp" class="invalid-feedback">{{ $errors->first('county') }}</small>
	                @endif
	            </div>

		      </div>
		      <div class="col-sm-6">

                        <div class="form-group">
    		          <label for="type">Type</label>
                          <div class="input-group mb-3">
        		    <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
			      <option></option>
			      @foreach($caseTypes as $type)
			      <option value="{{ $type->id }}"{{ ($type->id == $clientCase->case_type_id) ? ' selected="selected"' : '' }}>{{ $type->name }}</option>
			      @endforeach
			    </select>

		            <div class="input-group-append">
                              <!--<a href="/case-types/create" class="btn btn-primary" type="button"><i class="fas fa-plus"></i></a>-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTypeModal"><i class="fas fa-plus"></i></button>                
			    </div>
			  </div>
			  @if($errors->first('type'))
	                    <small id="typeHelp" class="invalid-feedback" style="display:inherit;">{{ $errors->first('type') }}</small>
	                  @endif
			</div>

                      </div>
                    </div>
		    
	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ $clientCase->description }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

   	            <button type="submit" class="btn btn-primary">Edit Case</button>
		    
		</form>

	    </div>
	</div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="createClientModal" tabindex="-1" role="dialog" aria-labelledby="createClientModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createClientModalLabel">Create Client</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                <p class="lead">Use the form to create a client.</p>

		<form method="POST" action="/clients">
		    {{ csrf_field() }}

		    <div class="row">
		        <div class="col-sm-6">

		            <div class="form-group">
      	                        <label for="name">Name</label>
                                <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                        @if($errors->first('name'))
	                        <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Email</label>
                                <input type="text" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
	                        @if($errors->first('email'))
	                        <small id="emailHelp" class="invalid-feedback">{{ $errors->first('email') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Phone</label>
                                <input type="text" class="form-control{{ $errors->first('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" aria-describedby="phoneHelp" value="{{ old('phone') }}">
	                        @if($errors->first('phone'))
	                        <small id="phoneHelp" class="invalid-feedback">{{ $errors->first('phone') }}</small>
	                        @endif
	                    </div>

			</div>
			<div class="col-sm-6">

		            <div class="form-group">
      	                        <label for="name">Address1</label>
                                <input type="text" class="form-control{{ $errors->first('address1') ? ' is-invalid' : '' }}" id="address1" name="address1" aria-describedby="address1Help" value="{{ old('address1') }}">
	                        @if($errors->first('address1'))
	                        <small id="address1Help" class="invalid-feedback">{{ $errors->first('address1') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="name">Address2</label>
                                <input type="text" class="form-control{{ $errors->first('address2') ? ' is-invalid' : '' }}" id="address2" name="address2" aria-describedby="address2Help" value="{{ old('addres2') }}">
	                        @if($errors->first('address2'))
	                        <small id="address2Help" class="invalid-feedback">{{ $errors->first('address2') }}</small>
	                        @endif
	                    </div>

		            <div class="form-group">
      	                        <label for="city">City</label>
                                <input type="text" class="form-control{{ $errors->first('city') ? ' is-invalid' : '' }}" id="city" name="city" aria-describedby="cityHelp" value="{{ old('city') }}">
	                        @if($errors->first('city'))
	                        <small id="cityHelp" class="invalid-feedback">{{ $errors->first('city') }}</small>
	                        @endif
	                    </div>

			    <div class="row">
			        <div class="col-sm-6">

			            <div class="form-group">
    			                <label for="province">Province</label>
        			        <select class="form-control{{ $errors->first('province') ? ' is-invalid' : '' }}" id="province" name="province">
				            <option></option>
				            @foreach($provinces as $province)
				            <option value="{{ $province->id }}">{{ $province->abbr }}</option>
				            @endforeach
				        </select>
				        @if($errors->first('province'))
	                                <small id="provinceHelp" class="invalid-feedback">{{ $errors->first('province') }}</small>
	                                @endif

			            </div>


				</div>
				<div class="col-sm-6">

				    <div class="form-group">
      	                                <label for="name">Postal Code</label>
                                        <input type="text" class="form-control{{ $errors->first('postal_code') ? ' is-invalid' : '' }}" id="postal_code" name="postal_code" aria-describedby="postalCodeHelp" value="{{ old('postal_code') }}">
	                                @if($errors->first('postal_code'))
	                                <small id="postalCodeHelp" class="invalid-feedback">{{ $errors->first('postal_code') }}</small>
	                                @endif
	                            </div>

				</div>
			    </div>

			</div>			
		    </div>

	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create Client</button>
    </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createTypeModal" tabindex="-1" role="dialog" aria-labelledby="createTypeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createTypeModalLabel">Create Type</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
                <p class="lead">Use the form to create a case type.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
		<form method="POST" action="/case-types">
		    {{ csrf_field() }}
		    <div class="form-group">
      	                <label for="title">Name</label>
                        <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}">
	                @if($errors->first('name'))
	                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
	                @endif
	            </div>
</div>
</div>
          <div class="row">
            <div class="col-sm-12">
	            <div class="form-group">
	                <label for="description">Description</label>
	                <textarea class="form-control{{$errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" aria-describedby="descriptionHelp" rows="3">{{ old('description') }}</textarea>
	                @if($errors->first('description'))
	                <small id="descriptionHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
	                @endif
	            </div>
</div>
</div>

</div>    
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create Type</button>
    </form>
          </div>
        </div>
      </div>
    </div>                    

@endsection