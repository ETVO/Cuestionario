<!DOCTYPE html>
<html lang="es">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/main.js"></script>
</head>

<body>


	<center>
		<div>
			<?php
         //Conecta com o PostgreSQL
         $conecta = pg_connect("host=10.6.64.33 port=5432 dbname=db6018280_respostas user=u6018280_etvo password=dbRolim02");
        if (!$conecta)
        {
            echo "<div class='head'></div>

	<div class='top show'>
		<div class='nav'>
			<ul>
				<li><a href='../'>Inicio</a></li>
				<li><a href='../validacion' id='active'>Validación</a></li>
				<li><a href='../info'>Informaciones</a></li>
			</ul>
		</div>
	</div>

	<div class='dropdown'>
		<div class='title'>
			Validación
		</div>
		<button onclick='dropMenu()' class='dropdown_btn'>Menu</button>
		<div id='' class='dropdown_content'>
			<a href='../'>Inicio</a>
			<a href='../validacion' id='active'>Validación</a>
			<a href='../info'>Informaciones</a>
		</div>
	</div><h2>¡No se pudo conectar con la base de datos!</h2>
			<center>
				<div id='rodape'>@ 2018<br><b>Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</b><br>Sitio desarollado por <a class='neutral' href='https://www.linkedin.com/in/estev%C3%A3o-rolim-b67bb1145/' target='_blank'>Estevão Rolim</a>.</div>
			</center>";
			exit;
        }
     ?>
		</div>
	</center>
</body>

</html>
