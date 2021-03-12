<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>
	<!-- get started boobstrat 4-->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/9b90030faa.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid ">

<h3 class="text-center py-3">LOGO</h3>
		</div>
		<div class="container-fluid bg-light">
		<div class="container">
			<ul class="nav nav-justified py-2 nav-pills">
				<li class="nav-item">
					<a class="nav-link "href="index.php?pagina=registro">registro </a>
				</li>
				<li class="nav-item">
					<a class="nav-link "href="index.php?pagina=ingreso">ingreso </a>
				</li>
				<li class="nav-item">
					<a class="nav-link active "href="index.php?paginas=inicio">inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link "href="index.php?pagina=salir">salir </a>
				</li>
				</ul>
			</div>
			<div class="container-fluid ">
		<div class="container py-5">
			<?php
			if(isset($_GET["pagina"])){
				if($_GET["pagina"]=="registro"||
					($_GET["pagina"])=="ingreso"||
						 $_GET["pagina"]=="inicio"||
							 $_GET["pagina"]=="salir"){
					include"paginas/".$_GET["pagina"].".php";
				}
			}else{
				include"paginas/registro.php";
			}
			include "paginas/inicio.php";
			?>
		</div>
	</div>

</body>
</html>