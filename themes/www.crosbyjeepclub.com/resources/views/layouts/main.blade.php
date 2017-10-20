<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | <?= $app->config['view']['title'] ?></title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg {
  position: relative;
  opacity: 0.65;
  background-position: 35% 50%;
  background-repeat: no-repeat;
  background-size: cover;
}

.bgimg {
  background-image: url("/img/jeep-compressed.jpg");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
  margin-top:-38px;
}

.caption span.border1 {
  background-color: #111;
  color: #fff;
  padding: 8px;
  font-size: 18px;
  letter-spacing: 5px;
  text-transform:uppercase;
}

.caption span.border2 {
  background-color: #111;
  color: #fff;
  padding: 8px;
  font-size: 12px;
  letter-spacing: 5px;
  text-transform:uppercase;
}

@media (min-width: 576px) {

.bgimg {
  background-position: center;
}

.caption {
  margin-top:-38px;
}

.caption span.border1 {
  padding: 13px;
  font-size: 25px;
  letter-spacing: 10px;
}

.caption span.border2 {
  padding: 13px;
  font-size: 18px;
  letter-spacing: 10px;
}

}

@media (min-width: 768px) {  }

@media (min-width: 992px) {  }

@media (min-width: 1200px) {  }
	</style>
	</head>
	<body>

    @yield('content')

</body>
</html>
