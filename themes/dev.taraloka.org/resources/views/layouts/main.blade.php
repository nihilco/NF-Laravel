<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="uid" content="{{ Auth::check() ? Auth::user()->id : null }}">
    
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
    <link href="/css/taraloka.css?t=<?= time() ?>" rel="stylesheet">
  </head>

  <body>
  <div id="app">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/">Taraloka Foundation</a>
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
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
	    <a class="nav-link" href="/signup">Signup</a>
	  </li>
	  @else
	  <notifications></notifications>
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
          <div class="col-sm-8" id="copyright">
            Copyright &copy; 2015-2017 The Taraloka Foundation.  All rights reserved.
          </div>
          <div class="col-sm-4" id="powered">
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
    <script src="/js/base.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>
