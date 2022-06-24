<!DOCTYPE html>
<?php
	session_start();
	
	include "../util/util.php";
?>


	<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<meta charset="UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="../style.css?n=1">
		<link rel="stylesheet" type="text/css" href="../cuestionario.css?n=1">
		<link rel="stylesheet" type="text/css" href="admin.css">
		<title>Admin - Competencias del Voleibol</title>
	</head>

	<body>
		<div id="conteudo">
			<div class="head" id="headjs"></div>
			
            <center>
			<div class="content">
                    <h2 style="margin-bottom: 0; text-align: left">Administración</h2>
                    <h3 style="margin-top: 0; text-align: left">Aceder</h3>

					<form action="index.php" method="post" class="query">
                        <div class="question password redbold">
                            <p>Por favor, introduzca la contraseña:</p>
                            <input type="password" class="short" name="senha" maxlength="20" style="margin-bottom: 7px">
							<br>
                            <label for="recordar">
                                <input type="checkbox" name="recordar" id="recordar"> 
                                Recordar-me
                            </label>                            
                            <br>
                            <input type="submit" class="entrar" value="Entrar">
                        </div>
                    </form>
                <hr>
				<p class="admActions">
					<a href="..">Volver al Inicio</a>
				</p>
                </div>
            </center>
        </div>


	</body>

	<script type="text/javascript" src="../js/cuestionario.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/page_loader.js"></script>

</html>
