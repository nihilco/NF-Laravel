@extends('layouts.main')

@section('opengraph')
<meta property="fb:app_id" content="187097078310518" />
<meta property="og:url" content="{{ url($fundraiser->path()) }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $fundraiser->name }} | The Faraloka Foundation" />
<meta property="og:description" content="{{ $fundraiser->description }}" />
<meta property="og:image" content="{{ url('/img/Donor_Book/Donor_Book-1.jpg') }}" />
@endsection

@section('title', $fundraiser->name)

@section('content')

    <div class="container page-top">

        <div class="row pt-3">
 	        <div class="col-sm-12">

                <h1>{{ $fundraiser->name }}</h1>

            </div>
        </div>

        <div class="row">
           <div class="col-sm-6">

<h2>We have raised ${{ number_format($fundraiser->actual / 100, 0) }} of our ${{ number_format($fundraiser->goal / 100, 0) }} goal.</h2>

<img src="/img/jackson_campbell.jpeg" alt="Jackson Campbell" class="img-fluid" />

<p class="mt-2">When Jackson Campbell traveled to India as a student in 2016, his focus was the adventure of bouldering among the ancient Hindu temples in Hampi.  While the bouldering was incredible, meeting the girls of the Sikkim Happiness Home is what lingered in his heart.</p>

    <p>After receiving a grant from Sewanee University for the travel and work, Jackson is returning to India to help with the installation and design of solar panels on the roof of the Sikkim Happiness Home!</p>

    <p>We are launching a campaign to fund the purchase of the solar panels and equipment.  Once installed, the girls will have electricity even when the power goes out - which is at least once a day.  Solar panels will also provide a system for heating water and cooking off the grid and without the need for propane tanks in the home.  The system will pay for itself in just a few years.</p>

    <p>Please help us raise the $6000 needed for this project!</p>

	        </div>
	        <div class="col-sm-6">

    @if(session()->has('cardError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><i class="fas fa-exclamation-triangle"></i> Error!</strong> {{ session('cardError') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
	  </button>
	  </div>
@endif
                                                                                                                                  
      <form method="POST" id="donation-form" role="form" action="/fundraisers/solar-panel-fundraiser">
	    {{ csrf_field() }}
        {{ method_field('PATCH') }}
                                                                                      
        <div class="mb-2">
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '25.00';">$25</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '50.00';">$50</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '100.00';">$100</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '250.00';">$250</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '500.00';">$500</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '1000.00';">$1000</button>
        </div>                                                                                                                                  
    
    	    <div class="row mt-2">
	      <div class="col-sm-6">

		    <div class="form-group">
              <label for="name">Amount</label>
              <input type="text" class="form-control{{ $errors->first('amount') ? ' is-invalid' : '' }}" id="amount" name="amount" aria-describedby="amountHelp" value="{{ old('amount') }}">
	          @if($errors->first('amount'))
	          <small id="amountHelp" class="invalid-feedback">{{ $errors->first('amount') }}</small>
	          @endif
	        </div>

		  </div>
	   </div>
       <div class="row">
	     <div class="col-sm-12">

		    <div class="form-group">
              <label for="name">Name</label>
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
              <label for="email">Email</label>
              <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
	          @if($errors->first('email'))
	          <small id="emailHelp" class="invalid-feedback">{{ $errors->first('email') }}</small>
	          @endif
	        </div>

		 </div>

       </div>

       <div class="row">
         <div class="col-sm-12">
    
        <div class="form-group">
        <label for="card-element">
          Credit or Debit Card
        </label>
        <div id="card-element">
          <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        </div>
    
         </div>
       </div>


       <div class="row">
	     <div class="col-sm-12">

		    <div class="form-group">
              <label for="comments">Comments</label>
              <textarea type="text" class="form-control{{ $errors->first('comments') ? ' is-invalid' : '' }}" id="comments" name="comments" aria-describedby="commentsHelp" value="{{ old('comments') }}"></textarea>
	          @if($errors->first('comments'))
	          <small id="commentsHelp" class="invalid-feedback">{{ $errors->first('comments') }}</small>
	          @endif
	        </div>

		 </div>
       </div>

   	   <button type="submit" class="btn btn-lg btn-primary">Donate</button>
		    
	 </form>
    
		    </div>

	    </div>
	</div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="processingPaymentModal" tabindex="-1" role="dialog" aria-labelledby="processingPaymentModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="processingPaymentModalTitle">Payment Processing...</h5>
          </div>
          <div class="modal-body">
            Your payment is processing.  Please be patient.  Do not click back or refresh your browser until this action is complete.
          </div>
        </div>
      </div>
    </div>
            
@endsection