<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="uid" content="{{ Auth::check() ? Auth::user()->id : null }}">
    
    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/mazestonelaw.css?t=<?= time() ?>" rel="stylesheet">
  </head>

  <body>

    <div id="app">

    <div class="container">
      <div class="row">
	<div class="col-sm-4">
	  <img src="/img/mazestonelaw-logo.jpg" alt="Maze & Stone" style="width:100%;"/>
	</div>	
	<div class="col-sm-4 text-center" id="header-contact">

	    <h3 class="mt-4 mb-4">Speak to a lawyer<br /><a href="tel:18598829999" target="_blank" style="font-weight:bold;">(859) 882-9999</a></h3>

        </div>
        <div class="col-sm-4 ml-lg-auto" id="header-contact">

            	 <dl class="row">
	    	    <dt class="col-sm-3">Phone:</dt>
		    <dd class="col-sm-9"><a href="tel:18598829999" target="_blank">(859) 882-9999</a></dd>
                    <dt class="col-sm-3">Fax:</dt>
	            <dd class="col-sm-9"><a href="tel:18598781769" target="_blank">(859) 878-1769</a></dd>
         	    <dt class="col-sm-3">Email:</dt>
	    	    <dd class="col-sm-9"><a href="mailto:contact@mazestonelaw.com" target="_blank">contact@mazestonelaw.com</a></dd>
                    <dt class="col-sm-3">Address:</dt>
	            <dd class="col-sm-9"><a href="https://goo.gl/maps/4r7oEKLAiAK2" target="_blank">127 West High Street<br />Mount Sterling, KY 40353</a></dd>
	        </dl>

	</div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
	<span class="navbar-brand mb-0">Menu</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExample04">
	  <ul class="navbar-nav mr-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="/">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="/about-us">About Us</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="/practice-areas">Practice Areas</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="/attorneys">Attorneys</a>
	    </li>
   	    <li class="nav-item">
	      <a class="nav-link" href="/contact">Contact</a>
	    </li>
	  </ul>
	</div>
      </div>
    </nav>

    @yield('content')

    <footer class="footer">
      <div class="container">
	<div class="row">
	  <div class="col-sm-8" id="copyright">
	    Copyright &copy; 2017 Maze & Stone, PLLC.  All rights reserved.  This is an advertisement.
	  </div>
	  <div class="col-sm-4" id="powered">
	    Powered by <a href="https://nihil.co" target="_blank">NIHIL</a>
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
    <script src="/js/base.js"></script>
  </body>
</html>
