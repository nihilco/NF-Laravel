<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>

    <style type="text/css">
      img {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 300px;
      height: 155px;
      margin-top: -77px; /* Half the height */
      margin-left: -150px; /* Half the width */
      }

      @media (min-width: 576px) {
      img {
      width: 600px;
      height: 310px;
      margin-top: -155px; /* Half the height */
      margin-left: -300px; /* Half the width */
      }
      }
    </style>
    
  </head>

  <body>

    @yield('content')

  </body>
</html>
