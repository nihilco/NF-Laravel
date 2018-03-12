<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Custom styles for this template -->
    <link href="/css/admin.css?t=<?php echo time() ?>" rel="stylesheet">

    <title>@yield('title') | {{ $app->config['view']['title'] }}</title>
  </head>
  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <a class="navbar-brand" href="/">{{ $app->config['view']['title'] }}</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	      <ul class="navbar-nav ml-auto">
	        @guest
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
	          <a class="nav-link" href="/signup">Signup</a>
	        </li>
	        @else
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        <i class="far fa-bell"></i>
	          </a>
	          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		        <a class="dropdown-item" href="#">
		          <div class="d-flex w-100 justify-content-between">
		            <h5 class="mb-1">List group item heading</h5>
		            <small>3 days ago</small>
		          </div>
		          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		          <small>Donec id elit non mi porta.</small>
		        </a>
		        <a class="dropdown-item" href="#">
		          <div class="d-flex w-100 justify-content-between">
		            <h5 class="mb-1">List group item heading</h5>
		            <small>3 days ago</small>
		          </div>
		          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		          <small>Donec id elit non mi porta.</small>
		        </a>
		        <a class="dropdown-item" href="#">
		          <div class="d-flex w-100 justify-content-between">
		            <h5 class="mb-1">List group item heading</h5>
		            <small>3 days ago</small>
		          </div>
		          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		          <small>Donec id elit non mi porta.</small>
		        </a>
		        <a class="dropdown-item" href="#">
		          <div class="d-flex w-100 justify-content-between">
		            <h5 class="mb-1">List group item heading</h5>
		            <small>3 days ago</small>
		          </div>
		          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		          <small>Donec id elit non mi porta.</small>
		        </a>
		        <a class="dropdown-item" href="#">
		          <div class="d-flex w-100 justify-content-between">
		            <h5 class="mb-1">List group item heading</h5>
		            <small>3 days ago</small>
		          </div>
		          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		          <small>Donec id elit non mi porta.</small>
		        </a>
	          </div>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="authDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        Uriah
	          </a>
	          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="authDropdown">
		        <a class="dropdown-item" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
		        <a class="dropdown-item" href="/profile"><i class="fas fa-user"></i> Profile</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fas fa-sign-out-alt"></i> Logout</a>
		        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		          {{ csrf_field() }}
	            </form>
	          </div>
	        </li>
	        @endguest
	      </ul>
	    </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
	    <div class="col-md-2 d-none d-md-block bg-light sidebar">

          @include('layouts.side-nav')
      
	    </div>

	    <div class="col-md-9 ml-sm-auto col-lg-10 content">

	      <main class="content-main">

            @yield('content')
	    
	      </main>

	      <footer class="footer">
	        <div class="container-fluid">
	          <div class="row">
		        <div class="col-sm-8">
		          <p style="display:inline-block;">Copyright &copy; 2009-2018 The NIHIL Corporation.  All rights reserved.</p>
		          <ul class="list-inline" style="display:inline-block;margin-left:1em;">
		            <li class="list-inline-item"><a href="/site-map">Site Map</a></li>
		            <li class="list-inline-item"><a href="/legal">Legal</a></li>
		            <li class="list-inline-item"><a href="/contact">Contact</a></li>
		          </ul>
		        </div>
		        <div class="col-sm-4 text-right">
		          <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
		        </div>
	          </div>
            </div>
	      </footer>

	    </div><!-- /.content  -->
                                                                    
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
