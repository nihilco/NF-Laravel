<!DOCTYPE html>
<html lang="en">
  <head>      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="uid" content="{{ Auth::check() ? Auth::user()->id : null }}">
    
    <link rel="icon" type="image/png" href="/img/favicon_32x32.png">

    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">
      
    <!-- Custom styles for this template -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/taraloka.css?t=<?= time() ?>" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2228318-23"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-2228318-23');
    </script>      
  </head>

  <body>
  <div id="app">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/"><img src="{{ url('/img/taraloka-combomark.png') }}" alt="Taraloka" width="auto" height="17" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/mission">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/newsletters">Newsletters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/partners">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
  	  <li class="nav-item">
            <a class="btn btn-primary" href="/donate">Donate</a>
          </li>
        </ul>
        <ul class="navbar-nav dd-right">
	  @guest
          <!--
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
	        <a class="nav-link" href="/signup">Signup</a>
	      </li>
          -->
	  @else
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      {{ auth()->user()->username }}
	    </a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	      <a class="dropdown-item" href="/dashboard">Dashboard</a>
	      <a class="dropdown-item" href="/profile">Profile</a>
	      <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	      </form>
	    </div>
          </li>
	  @endguest
	</ul>
      </div>
    </nav>

    @yield('content')

    <footer class="footer">
      <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-6">

          <div class="row">
            <div class="col-sm-12">

              <ul class="list-inline">
                <li><a href="/"><img src="/img/taraloka-wordmark.png" alt="Taraloka Foundation" style="width:150px;" /></a></li>
              </ul>

            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p><strong class="font-green">The Taraloka Foundation</strong> is a registered 501(c)3 non-profit organization creating opportunities for Himalayan girls by providing education, healthcare, and a safe refuge.</p>
      <p>Our mission is focused and simple.  We provide a safe refuge for orphaned and disadvantaged girls in the Indian Himalayan state of Sikkim - covering all of their needs until they graduate from college.  Taraloka now has nineteen girls in the home, eight in college, and two college graduates.</p>
            </div>
          </div>

        </div>
  	    <div class="col-lg-8 col-md-7 col-sm-6">

          <div class="row">
            <div class="col-lg-4 col-6 text-center">
              <a href="/mission">
                <img src="/img/mission.jpg" alt="mission" class="img-fluid" />
                <h4>mission</h4>
              </a>
            </div>
            <div class="col-lg-4 col-6 text-center">
              <a href="/trips">
                <img src="/img/trips.jpg" alt="trips" class="img-fluid" />
                <h4>trips</h4>
              </a>
            </div>
            <div class="col-lg-4 col-6 text-center">
              <a href="/films">
                <img src="/img/film.jpg" alt="films" class="img-fluid" />
                <h4>films</h4>
              </a>
            </div>
            <div class="col-lg-4 col-6 text-center">
              <a href="/about">
                <img src="/img/about.jpg" alt="about" class="img-fluid" />
                <h4>about</h4>
              </a>
            </div>
            <div class="col-lg-4 col-6 text-center">
              <a href="/donate">
                <img src="/img/donate.jpg" alt="donate" class="img-fluid" />
                <h4>donate</h4>
              </a>
            </div>
            <div class="col-lg-4 col-6 text-center">
              <a href="/partners">
                <img src="/img/partners.jpg" alt="partners" class="img-fluid" />
                <h4>partners</h4>
              </a>
            </div>
	  </div>

	</div>

      </div>
	
        <div class="row">
          <div class="col-md-9" id="copyright">
      Copyright &copy; 2015-<?php echo date('Y'); ?> <strong class="font-green">The Taraloka Foundation</strong>.  All rights reserved.
          </div>
          <div class="col-md-3" id="powered">
            Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a>
          </div>
        </div>
      </div>
    </footer>

    <flash message="{{ session('flash') }}"></flash>

  </div>
  
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--<script src="/js/base.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>-->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://vjs.zencdn.net/7.0.3/video.js"></script>                           
    <script>
                           $(function () {
                               $('[data-toggle="tooltip"]').tooltip()
                                   })
                           
     // Create a Stripe client.
     var stripe = Stripe('pk_test_oBG1UuDfekCXu72oDEOjRcqk');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
      color: '#32325d',
      lineHeight: '18px',
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: 'antialiased',
      fontSize: '16px',
      '::placeholder': {
          color: '#aab7c4'
        }
  },
  invalid: {
      color: '#fa755a',
      iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission.
var form = document.getElementById('donation-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            //stripeTokenHandler(result.token);
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'stripeToken';
            input.value = result.token.id;
            form.appendChild(input);
            form.submit();
        }
    });
});
    </script>
  </body>
</html>
