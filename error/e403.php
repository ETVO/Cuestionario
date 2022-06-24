<?php
	session_start();
	session_destroy();
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>

	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="error.css">
	<title>Informaciones - Competencias del Voleibol</title> 
</head>

<body>
	<div id="conteudo">
		<div class="head"></div>
		<div class="top show">
			<div class="nav">
				<ul>
					<li><a href="../">Inicio</a></li>
					<!-- <li><a href="../piloto">Piloto</a></li> -->
					<li><a href="../cuestionario">Cuestionario</a></li>
					<li><a href="">Informaciones</a></li>
				</ul>
			</div>
		</div>

		<div class="dropdown">
			<div class="title">
				Error
			</div>
			<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
			<div id="" class="dropdown_content">
				<a href="../">Inicio</a>
				<!-- <a href="../piloto">Piloto</a> -->
				<a href="../cuestionario">Cuestionario</a>
				<a href="">Informaciones</a>
			</div>
		</div>

		<center>
        <div id="cerror">
        <h1>Error 403!</h1>
        <h3>¡Prohibido!</h3>
        </div>
		</center>

		<center>
			<div id="rodape"></div>
		</center>
	</div>
</body>

</html>
