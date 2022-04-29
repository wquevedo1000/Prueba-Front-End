<?php

	include "Functions/seguridadCliente.php";

?>

<html>
<head>
	<title>ActionMovies</title>
    <script src="js/jquery-3.5.1.min.js"></script>
	<meta charset="utf-8" lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">

		 $(document).ready(function(){


		 	$("#formulario").keyup(function(){

		 		const movies = [{nombre: 'DOCTOR STRANGE EN EL MULTIVERSO DE LA LOCURA de Marvel'}, {nombre: 'LA CIUDAD PERDIDA'}, {nombre: 'SONIC 2'}, {nombre: 'ANIMALES FANTÁSTICOS: LOS SECRETOS DE DUMBLEDORE'}, {nombre: 'MORBIUS'}, {nombre: 'EL HOMBRE DEL NORTE'}];

 				const texto = $(this).val().toLowerCase();
        		console.log(texto);


 				for(let movie of movies){

 					let peli = movie.nombre.toLowerCase();

 					if(peli.search(texto) !== -1){

 						$(".card").hide();

 						$('.card[category="'+movie.nombre+'"]').show();

 					}
 				}

		 	});

		 	$("#formulario").keyup(function(){

		 		if($(this).val()==""){

		 			$(".card").show();	

					$("#mensaje").html();

		 		}	 		

		 	});	

		 	$("#formulario2").click(function(){

		 		const movies = [{valor: 'Superheroes'}, {valor: 'Aventura'}, {valor: 'Comedia'}, {valor: 'Acción'}, {valor: 'Fantasía'}, {valor: 'Drama'}];

 				const texto = $(this).val();
        		console.log(texto);


 				for(let movie of movies){

 					let peli = movie.valor;

 					if(peli.search(texto) !== -1){

 						if(movie.valor == "Superheroes"){

 							$(".card").hide();

 							$('.card[super="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}else if(movie.valor == "Aventura"){

 							$(".card").hide();

 							$('.card[aven="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}else if(movie.valor == "Comedia"){

 							$(".card").hide();

 							$('.card[com="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}else if(movie.valor == "Acción"){

 							$(".card").hide();

 							$('.card[ac="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}else if(movie.valor == "Fantasía"){

 							$(".card").hide();

 							$('.card[fan="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}else if(movie.valor == "Drama"){

 							$(".card").hide();

 							$('.card[dra="'+movie.valor+'"]').show();

 							$("#mensaje").html("");

 						}

 					}
 				}

		 	});	 	

		 	$('#formulario2').click(function(){

		 		if($(this).val()=="Todos"){

					$(".card").show();	

					$("#mensaje").html();

				}

			});		

		});
    </script>
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

					<a class="btn btn-primary btn-lg" data-role="button" href="#"><?php echo $_SESSION['Us_PNombre']." ".$_SESSION['Us_PApellido'];  ?></a>

					&nbsp;


					<a class="btn btn-primary btn-lg" data-role="button" href="cierreCliente.php?tk=<?php echo $_SESSION['token']; ?>">CERRAR SESIÓN</a>

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

</div>
	<div class="container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">

				<br>

				<center><img src="images/image2.png" class="img-fluid" width="500px" height="400px"></center>

				<br>
				<br>
			</div>
		</div>
	</div>
	<center>
		<div class="col-md-7">
		    <div class="row">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a href="#" class="nav-link active">RECIENTES</a></li>
					<li class="nav-item"><a href="Top.php" class="nav-link btn-outline-light">MÁS VISTAS</a></li>
				</ul>
			</div>
			<div class="row bg-white px-3 py-3">
				<p>


	<div class="container">		
		<div class="col-lg-12">
				<center><h1>RECIENTES</h1></center>

				<p>Películas</p>

				<input type="text" id="formulario" placeholder="Películas" class="form-control">

				<p>Categorías</p>

				<select id="formulario2" class="form-control">
					<option value="Todos">Todos</option>
					<option value="Superheroes">Superheroes</option>
					<option value="Aventura">Aventura</option>
					<option value="Comedia">Comedia</option>
					<option value="Acción">Acción</option>
					<option value="Fantasía">Fantasía</option>
					<option value="Drama">Drama</option>
				</select>
		</div>

		<br>

	<div class="col-md-12">

	<div id="mensaje"></div>
	
		<div class="card" style="width: 200px; height: 600px; float: inline-start; float: left;" category="DOCTOR STRANGE EN EL MULTIVERSO DE LA LOCURA de Marvel" super="Superheroes" aven="Aventura">
			<img src="images/image11.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">DOCTOR STRANGE EN EL MULTIVERSO DE LA LOCURA de Marvel</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Superheroes, Aventura
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal1">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">DOCTOR STRANGE EN EL MULTIVERSO DE LA LOCURA de Marvel</h1>
						<center><img src="images/image11.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Superheroes, Aventura</p>
						<p>
							El Doctor Strange viaja a lo desconocido con la ayuda de aliados místicos tanto antiguos como nuevos, el atraviesa las alucinantes y peligrosas realidades alternativas del multiverso para enfrentarse a un nuevo y misterioso adversario; que podría ser Kang El Conquistador.
						</p>
						<p class="h4">Reparto:</p><p>Benedict Cumberbatch, Chiwetel Ejiofor, Elizabeth Olsen, Benedict Wong, Xochitl Gomez, Michael Stühlbarg y Rachel McAdams.</p>
						<p class="h4">Director:</p><p>Sam Raimi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="card" style="width: 200px; height: 600px; float: left;" category="LA CIUDAD PERDIDA" aven="Aventura" com="Comedia">
			<img src="images/image15.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">LA CIUDAD PERDIDA</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Comedia, Aventura
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal2">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal2">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">LA CIUDAD PERDIDA</h1>
						<center><img src="images/image15.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Comedia, Aventura</p>
						<p>
							La autora brillante, pero solitaria, Loretta Sage (Sandra Bullock) ha pasado su carrera escribiendo sobre lugares exóticos en sus populares novelas románticas y de aventuras protagonizadas por el apuesto modelo de portada Alan (Channing Tatum), quien ha dedicado su vida a encarnar al héroe, “Dash”. Mientras está de gira promocionando su nuevo libro con Alan, Loretta es secuestrada por un excéntrico multimillonario (Daniel Radcliffe) que espera poder llevarlo al tesoro de la antigua ciudad perdida de su última historia.
						</p>
						<p class="h4">Reparto:</p><p>Sandra Bullock, Channing Tatum, Daniel Radcliffe, Da'Vine Joy Randolph, Oscar Nuñez, Patti Harrison, Bowen Yang.</p>
						<p class="h4">Director:</p><p>Aaron Nee y Adam Nee.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="card" style="width: 200px; height: 600px;  float: inline-end; float: left;" category="SONIC 2" aven="Aventura" com="Comedia" ac="Acción">
			<img src="images/image13.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">SONIC 2</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Comedia, Aventura, Acción
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal3">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal3">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">SONIC 2</h1>
						<center><img src="images/image13.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Comedia, Aventura, Acción</p>
						<p>
							Después de establecerse en Green Hills, Sonic se muere por demostrar que tiene madera de auténtico héroe. La prueba de fuego llega con el retorno del malvado Robotnik, en esta ocasión con un nuevo compinche, Knuckles, en busca de una esmeralda que tiene el poder de destruir civilizaciones. Sonic forma equipo con su propio compañero de fatigas, Tails, y juntos se lanzan a una aventura que les llevará por todo el mundo en busca de la preciada piedra para evitar que caiga en manos equivocadas.
						</p>
						<p class="h4">Reparto:</p><p>James Marsden, Jim Carrey, Tika Sumpter, Idris Elba, Natasha Rothwell, Shemar Moore, Adam Pally, Lee Majdoub. Voz: Ben Schwartz</p>
						<p class="h4">Director:</p><p>Jeff Fowler</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="card" style="width: 200px; height: 600px; float: inline-start; float: left;" category="ANIMALES FANTÁSTICOS: LOS SECRETOS DE DUMBLEDORE" aven="Aventura" fan="Fantasía">
			<img src="images/image19.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">ANIMALES FANTÁSTICOS: LOS SECRETOS DE DUMBLEDORE</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Fantasía, Aventura
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal4">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal4">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">ANIMALES FANTÁSTICOS: LOS SECRETOS DE DUMBLEDORE</h1>
						<center><img src="images/image19.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Fantasía, Aventura</p>
						<p>
							Tercera entrega de la serie 'Animales fantásticos y dónde encontrarlos' que sigue las aventuras de Newt Scamander.
						</p>
						<p class="h4">Reparto:</p><p>Mads Mikkelsen, Jude Law, Eddie Redmayne, Ezra Miller, Katherine Waterston, Alison Sudol, Dan Fogler</p>
						<p class="h4">Director:</p><p>David Yates</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="card" style="width: 200px; height: 600px; float: left;" category="MORBIUS" super="Superheroes" aven="Aventura">
			<img src="images/image16.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">MORBIUS</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Superheroes, Aventura
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal5">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal5">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">MORBIUS</h1>
						<center><img src="images/image16.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Superheroes, Aventura</p>
						<p>
							El Doctor Michael Morbius (Jared Leto) es un bioquímico que sufre una extraña enfermedad en la sangre. Al intentar curarse y dar una respuesta a su trastorno se infecta sin darse cuenta con una forma de vampirismo. Tras la cura, Michael se siente más vivo que nunca y adquiere varios dones como fuerza y velocidad, además de una necesidad irresistible de consumir sangre. Trágicamente convertido en un imperfecto antihéroe, el Doctor Morbius tendrá una última oportunidad, pero ¿A qué precio?.
						</p>
						<p class="h4">Reparto:</p><p>Jared Leto, Tyrese Gibson, J.K. Simmons, Matt Smith, Adria Arjona, Jared Harris, Charlie Shotwell, Corey Johnson, Tom Forbes, Adam El Hagar, Archie Renaux, Al Madrigal, Philip Gascoyne</p>
						<p class="h4">Director:</p><p>Daniel Espinosa</p>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="card" style="width: 200px; height: 600px; float: inline-end;  float: left;" category="EL HOMBRE DEL NORTE" ac="Acción" dra="Drama">
			<img src="images/image12.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-title">EL HOMBRE DEL NORTE</h5>
				<h6 class="card-subtitle text-muted">Categoria:</h6>
				<p class="card-text">
					Drama, Acción
				</p>
		<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal6">Ver más</button>
			</div>
		</div>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="modal6">
			<div class="modal-dialog modal-lg modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<h1 class="display-4">EL HOMBRE DEL NORTE</h1>
						<center><img src="images/image12.jpg" class="img-fluid rounded" style="height: 500px; width: 400px;"></center>
						<p class="h3">Categoria: Drama, Acción</p>
						<p>
							Del aclamado director Robert Eggers (La Bruja, El Faro) presenta EL HOMBRE DEL NORTE protagonizada por Alexander Skarsgard, Anya Taylor-Joy, Nicole Kidman, Ethan Hawke, Willem Dafoe, y Björk. EL HOMBRE DEL NORTE es un épico thriller de venganza que explora qué tan lejos llegaría un príncipe Vikingo para buscar justicia del asesinato de su padre.
						</p>
						<p class="h4">Reparto:</p><p>Alexander Skarsgård, Anya Taylor-Joy, Nicole Kidman, Ethan Hawke, Willem Dafoe, Claes Bang, Björk</p>
						<p class="h4">Director:</p><p>Robert Eggers</p>
					</div>
				</div>
			</div>
		</div>
	</div>


		<div class="card" style="width: 200px; height: 600px; float: inline-start; float: left;" category="none">
			<div class="card-body">
				<h5 class="card-title"></h5>
			</div>
		</div>

	</div>

				</p>
			</div>
		</div>
	</center>

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