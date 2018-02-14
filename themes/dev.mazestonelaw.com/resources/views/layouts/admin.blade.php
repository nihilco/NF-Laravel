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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/mazestonelaw.css?t=<?= time() ?>" rel="stylesheet">
  </head>

  <body>

    <div id="app">

      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
	<span class="navbar-brand admin mb-0"><a href="/" style="color:#FFF;">Maze & Stone</a></span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExample04">
	  <ul class="navbar-nav mr-auto">
	    <li class="nav-item">
	      <a class="nav-link" href="/dashboard">Dashboard</a>
	    </li>
    	    <li class="nav-item">
	      <a class="nav-link" href="/cases?active=true">Active Cases</a>
	    </li>
    	    <li class="nav-item">
	      <a class="nav-link" href="/cases?closed=true">Closed Files</a>
	    </li>
	  </ul>
	  <form class="form-inline my-2 my-lg-0">
	    <div class="input-group">
	      <input type="search" class="form-control" placeholder="Search" aria-label="Search">
	      <div class="input-group-append">
		<button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
	      </div>
	    </div>
	  </form>
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
