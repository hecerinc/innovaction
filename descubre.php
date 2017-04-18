<?php 

// Este es el template para los proyectos
// Show them all!

// 1. Abrir una conexion a la base de datos
// 2. Ejecutar el query contra la base de datos
// 3. Obtener los results
// 4. Print them

require('connectdb.php');

$query = "SELECT * FROM proyectos";

// Abrir la conexion a la base de datos

$connect = connectDB("localhost", "root", "", "innovaction");
// Ejecuto el query

$result = mysqli_query($connect, $query);

mysqli_close($connect);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/img/Innovaction - Dashboard_files/logo.png">

	<title>Proyectos</title>

	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/descubre.css" rel="stylesheet">
</head>

	<body>
		<div class="collapse bg-inverse" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 py-4">
						<h4 class="text-white">Acerca</h4>
						<p class="text-muted">Ladida,dida, dadi. Ladida,dida, dadi. Ladida,dida, dadi. Ladida,dida, dadi. Ladida,dida, dadi. Ladida,dida, dadi. Ladida,dida, dadi. </p>
					</div>
					<div class="col-sm-4 py-4">
						<h4 class="text-white">Contáctanos</h4>
						<ul class="social">
								<li><a href="https://www.facebook.com/InnovactionGym/?hc_ref=PAGES_TIMELINE" target="_blank"><span class="label">Facebook</span></a></li>
								<li><a href="https://twitter.com/innovactiongym?lang=es" target="_blank"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.instagram.com/iag_mty/" target="_blank"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.youtube.com/channel/UClyn-cuv4rM1fPZaVi4uzWg" target="_blank"><span class="label">Youtube</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-inverse bg-inverse">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand">Descubre</a>

				<!-- Nav -->
				<nav id="nav">
						<ul>
								<li><a href="index.html">Inicio</a></li>
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="index.html">Iniciar sesión</a></li>
								<li><a href="index.html">Crear cuenta</a></li>
						</ul>
				</nav>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>

		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">¡Descubre Proyectos!</h1>
				<p class="lead text-muted">En esta pagina puedes encontrar... proyectos <br></br></p>
			</div>

			<!-- Filtrar -->
			<div id="filtrar">
			<button type="button" class="close"></button>
					<form>
							<button type="submit" class="btn btn-primary">Filtrar</button>
					</form>
			</div>
		</section>

		<div class="album text-muted">
			<div class="container">
				<div class="row">
					<div class="resp">
						<?php while($row = mysqli_fetch_assoc($result)):  ?>
							<div class="card">
								<h4><?= $row['Titulo'] ?></h4>
								<img  width="360" height="350" src="http://lorempixel.com/500/500/sports" alt="Card image cap">
								<p class="card-text"><?= $row['Descripcion'] ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Page Changer -->
		<div class="page-changer">
			<img  width="500" height="50" src=img/logo.png border=0 />
			<div id="foot" role="navigation">
				<div data-jibp="h" data-jiis="uc" id="cljs"></div>
				<span data-jibp="h" data-jiis="uc" id="xjs">
					<table style="border-collapse:collapse;text-align:left;margin:30px auto 30px" id="nav" role="presentation">
						<tr valign="top">
							<td class="b navend"> <span class="csb" </span></td> <td class="cur">
							<td> <button type="button" aria-label="Page 1" class="btn btn-outline-primary" > 1 </button> </td>
							<td> <button type="button" aria-label="Page 2" class="btn btn-outline-primary" > 2 </button> </td>
							<td> <button type="button" aria-label="Page 3" class="btn btn-outline-primary" > 3 </button> </td>
							<td> <button type="button" aria-label="Page 4" class="btn btn-outline-primary" > 4 </button> </td>
							<td> <button type="button" aria-label="Page 5" class="btn btn-outline-primary" > 5 </button> </td>
							<td> <button type="button" aria-label="Page 6" class="btn btn-outline-primary" > 6 </button> </td>
							<td> <button type="button" aria-label="Page 7" class="btn btn-outline-primary" > 7 </button> </td>
							<td> <button type="button" aria-label="Page 8" class="btn btn-outline-primary" > 8 </button> </td>
							<td> <button type="button" aria-label="Page 9" class="btn btn-outline-primary" > 9 </button> </td>
							<td> <button type="button" aria-label="Page 10" class="btn btn-outline-primary" > 10 </button> </td>
							<td class="b navend"><button type="button" aria-label="Next" class="btn btn-outline-primary" > Next </button></td>
						</tr>
					</table>
				</span>
				<div data-jibp="h" data-jiis="uc" id="gfn">
					<style>#foot{visibility:inherit}</style>
				</div>
				<span data-jibp="h" data-jiis="uc" id="fvf"></span>
			</div>
		</div>

		<footer id="footer" class=''>
			<div class="container">
				<div class='row'>
					<div class="content">
						ITESM Campus Monterrey
						<br></br>
						Av. Eugenio Garza Sada 2501 Sur,
						Tecnológico,  64849 Monterrey, N.L.
						<br></br>
						Edificio CETEC, Piso no.2
						<br></br>
						innovaction@gmail.com
						<br></br>
						+52 (81) 1516 1718
					</div>
				</div>
			</div><!-- /.container -->
		</footer>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="js/projecto.js"></script>
		<script src="../../assets/js/vendor/holder.min.js"></script>
		<script>
			$(function () {
				Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
			});
		</script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
