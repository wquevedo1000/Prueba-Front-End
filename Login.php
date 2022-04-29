<html>
<head>
	<title>ActionMovies</title>
	<meta charset="utf-8" lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
    <style>
    	
    	h1{

    		color: #FFF;

    	}

    	p{

    		color: #FFF;

    	}

    </style>
</head>
<body style="background: #6c1adb;">

<div class="container col-xs-12 col-sm-12 col-lg-12 col-xl-12">
	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
			<nav class="navbar navbar-expand-lg navbar-light" style="background: #6c1adb;">

				<a href="#" class="navbar-brand"><img src="images/image.png" height="50px" width="50px"></a>

				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>

			<div id="menu" class="collapse navbar-collapse">
			 	<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						
					</li>
					<li class="nav-item">
						
					</li>
					<li class="nav-item">
						
					</li>
				</ul>

				<div class="mr-sm-2">

					<div class="row">

					<a class="btn btn-primary btn-lg" data-role="button" href="Index.php">INICIO</a>

					&nbsp;

					<a class="btn btn-primary btn-lg" data-role="button" href="Registro.php">REGISTRARSE</a>

					&nbsp;

					<div class="dropdown">
						<button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
						<img src="images/image5.png">
						</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Modo Oscuro</a>
					</div>

				</div>

				</div>

			</nav>

		</div>

	</div>

	<div class="container">

		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">

				<br>

				<center><img src="images/image2.png" class="img-fluid" width="400px" height="300px"></center>

			</div>

		</div>

	</div>

<div class="container">
	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">

			<center><h1 class="display-2 py-3">Iniciar Sesión</h1></center>

			<center>

				<form action="" method="post" class="col-md-6 bg-light py-3">

					<div class="row">

						<div class="form-group col-md">
	
							<label>Correo Electronico</label>

							<input type="text" name="email" class="form-control">

						</div>

						<div class="form-group col-md">

							<label>Contraseña</label>

							<input type="password" name="contrasena" class="form-control">

						</div>

					</div>

					<input type="submit" value="Iniciar Sesión" class="btn btn-primary">
	

				</form>
			</center>
		</div>
	</div>
</div>
<?php
    if(isset($_POST['email']) && isset($_POST['contrasena'])){

    	require_once "Connection/Connection.php";
    	require_once "Functions/Login2.php";
    }
?>
<br>
<br>
<div class="container">

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">

			<center>
		
				<p class="h3">Si no tienes cuenta regístrate en este <a href="Registo.php" class="btn btn-primary btn-lg" data-role="button">link</a>.</p>

			</center>

		</div>

	</div>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">

			<center>
		
				<img src="images/image.png" width="50px" height="50px">

				<footer class="footer">©ActionMovies 2022</footer>

			</center>

		</div>

	</div>

</div>
</body>
</html>