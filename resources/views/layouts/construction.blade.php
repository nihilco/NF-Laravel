<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
      /*
       * Globals
       */

      /* Links */
      a,
      a:focus,
      a:hover {
        color: #fff;
      }

      /* Custom default button */
      .btn-secondary,
      .btn-secondary:hover,
      .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: .05rem solid #fff;
      }

      /*
       * Base structure
       */

      html,
      body {
        height: 100%;
        background-color: #333;
      }

      body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
      }

      .cover-container {
        max-width: 42em;
      }

      /*
       * Header
       */

      .masthead {
        margin-bottom: 2rem;
      }

      .masthead-brand {
        margin-bottom: 0;
      }

      .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
      }

      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
      }

      .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
      }

      .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
      }

      .cover-heading {
        text-transform: uppercase;
      }

      .lead {
        text-transform: uppercase;
      }

      @media (min-width: 48em) {

        .masthead-brand {
          float: left;
        }
	
        .nav-masthead {
          float: right;
        }
	
        .cover-heading {
	  font-size: 4.5em;
	}
      }

      /*
       * Cover
       */

      .cover {
        padding: 0 1.5rem;
      }

      .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
      }

      /*
       * Footer
       */

      .mastfoot {
        color: rgba(255, 255, 255, .5);
      }

    </style>

  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

      <header class="masthead mb-auto"></header>

      @yield('content')

      <footer class="mastfoot mt-auto">
        <div class="inner">
	  <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
	</div>
      </footer>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
		  