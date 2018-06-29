@extends('layouts.main')

@section('opengraph')
<meta property="fb:app_id" content="187097078310518" />
<meta property="og:url" content="https://www.taraloka.org/donate" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Donate | The Faraloka Foundation" />
<meta property="og:description" content="The Taraloka Foundation is a registered 501(c)3 non-profit organization creating opportunities for Himalayan girls by providing education, healthcare, and a safe refuge." />
<meta property="og:image" content="{{ url('/img/Donor_Book/Donor_Book-1.jpg') }}" />
@endsection

@section('title', 'Donate')

@section('content')

    <div class="container page-top">
      <div class="pt-3">
        <h1>Donate</h1>
      </div>
      <p class="lead">Please use the form below to make a donation.</p>

      <form method="POST" id="donation-form" role="form" action="/donate">
	    {{ csrf_field() }}
    
        <div class="mb-2">
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '25.00';">$25</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '50.00';">$50</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '100.00';">$100</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '250.00';">$250</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '500.00';">$500</button>
          <button type="button" class="btn btn-lg btn-primary" onclick="this.form.elements.namedItem('amount').value = '1000.00';">$1000</button>
        </div>

	    <div class="row">
	      <div class="col-sm-6">

		    <div class="form-group">
              <label for="name">Amount</label>
              <input type="text" class="form-control{{ $errors->first('amount') ? ' is-invalid' : '' }}" id="amount" name="amount" aria-describedby="amountHelp" value="{{ old('amount') }}">
	          @if($errors->first('amount'))
	          <small id="amountHelp" class="invalid-feedback">{{ $errors->first('amount') }}</small>
	          @endif
	        </div>

		  </div>
          <div class="col-sm-6">
<!--
    		<div class="form-group">
              <label for="name">Recurrence</label><br />

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="radio" name="recurrence" id="single" autocomplete="off" checked> Single
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="recurrencce" id="monthly" autocomplete="off"> Monthly
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="recurrence" id="annual" autocomplete="off"> Annual
                </label>
              </div>

	          @if($errors->first('recurrence'))
	          <small id="recurrenceHelp" class="invalid-feedback">{{ $errors->first('recurrence') }}</small>
	          @endif
	        </div>
    -->
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