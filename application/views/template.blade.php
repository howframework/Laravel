<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HowFrameWork</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
    	<meta name="author" content="">

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	    
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<header>
			<div class="container">
				<div class="row">
					<div class="span6">
						<h1>This is my header</h1>
						<p>This is my site slogan</p>
					</div>
					<div class="span6">
						<p>Proin id libero molestie ante faucibus tincidunt sit amet ac nisi. Mauris feugiat ultricies magna eu laoreet. Nunc tincidunt tempus leo vitae gravida.
						</p>
				</div>
			</div>
		</header>

		<div id="body">
			<div class="container">
				<div class="row">

					<div id="content" class="span8">
						@yield('content')
					</div>
					<div id="sidebar" class="span4">
						@yield('sidebar')
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="span6">&copy; Copyright 2012</div>
					<div class="span6"></div>
				</div>
			</div>
		</footer>
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>