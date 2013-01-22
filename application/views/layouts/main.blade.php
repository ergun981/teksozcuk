<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Tek Sözcük | Sadece Yaz!</title>
	<meta name="viewport" content="width=device-width">
{{Asset::container('bootstrapper')->styles();}}
{{Asset::container('bootstrapper')->scripts();}}
</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Tek Sözcük</a>
          <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li class="active"><a href="#">Anasayfa</a></li>
              <li><a href="#about">Hakkında</a></li>
              <li><a href="#contact">İletişim</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    	@yield('content')
    	<hr>

    	<footer>
    		<p>&copy; Tek Sözcük 2013</p>
    	</footer>

    </div> <!-- /container -->
</body>
</html>