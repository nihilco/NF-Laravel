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
    <link href="/css/nihil.css" rel="stylesheet">
  </head>

  <body>

    <header>
      
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">NIHIL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="/features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>      
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signup">Signup</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" style="padding-top:51px;">
      @yield('content')
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row" >
          <div class="col-sm-3">
            <div class="row">
              <div class="col-sm-12">
                NIHIL
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="row" style="padding-bottom:25px;">
              <div class="col-sm-12">
                <h3>Let nothing stand in the way</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <h4>Navigate</h4>
                <ul class="list-unstyled">
                  <li><a href="/site-map">Site Map</a></li>
                  <li><a href="/legal/privacy">Privacy</a></li>
                  <li><a href="/legal/terms">Terms</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Links</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Support</h4>
                <ul class="list-unstyled">
                  <li><a href="/faqs">FAQs</a></li>
                  <li><a href="/forums">Forums</a></li>
                  <li><a href="/tickets">Tickets</a></li>
                  <li><a href="/tutorials">Tutorials</a></li>      
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Company</h4>
                <ul class="list-unstyled">
                  <li><a href="/portfolio">Portfolio</a></li>
                  <li><a href="/history">History</a></li>
                  <li><a href="/team">Team</a></li>
                  <li><a href="/jobs">Jobs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top:25px;">
          <div class="col-sm-6">
            <p>Copyright &copy; 2018 The NIHIL Corporation.  All rights reserved.</p>
          </div>
          <div class="col-sm-6 text-right">
            <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>