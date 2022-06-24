<?php
	session_start();
	
	include "../util/util.php";

	if(isset($_POST['senha'])) {
		$senha = $_POST['senha'];

		if(isset($_POST['recordar'])) {
			$_SESSION['recordar'] = true;
			$_SESSION['adminMD5'] = md5($senha);

			header("Refresh: 0");
		}
		else {
			unset($_SESSION['recordar']);
			unset($_SESSION['adminMD5']);
		}
	}
	else if(!isset($_SESSION['adminMD5'])) {
		echo "<script>window.location.href = 'login.php'</script>";
		exit;
	}
?>
<!DOCTYPE html>

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

					<?php
						
					if(isset($senha) || isset($_SESSION['adminMD5'])) {
						$adminMD5 = (isset($senha)) ? md5($senha) : $_SESSION['adminMD5'];
						
						if($adminMD5 == getSenha())
						{
							$_SESSION['adminMD5'] = $adminMD5;

							$session = substr($adminMD5, 0, 6);
							echo "<p><small>Sesión: $session</small></p>";

							?>
								<h2 style="margin: 0; text-align: left">Administración</h2>
								<h3 style="margin-top: 0; text-align: left">Datos recogidos</h3>
								

								<table class="admOpts">
									<tr>
										<th>
											Hojas de Cálculo
										</th>
									</tr>
									<tr>
										<td>
											<a href="r/rfinal.php" download class="hojas">
												Cuestionario Final
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="r/rsorteo.php" download class="hojas">
												Participantes del Sorteo
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="r/rpiloto.php" download class="hojas">
												Cuestionario Piloto
											</a>
										</td>
									</tr>
									<tr>
										<th>
											Otras opciones
										</th>
									</tr>
									<tr>
										<td>
											<a href="registros.php" target="_blank">Registros</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="recuperar_grafico.php" target="_blank">Recuperar Gráfico</a>	
										</td>
									</tr>
									<tr>
										<td>
											<a href="general.php" target="_blank">Gráficos Generales</a>
										</td>
									</tr>
								</table>

								<hr>
								<p class="admActions">
									<a href="..">Volver al Inicio</a> 
									<br>
									<a href="endsession.php">Finalizar la sesión</a>
								</p>
							<?php
						}
						else{
							senha(true);
						}
					}
					else{
						senha(false);
					}
					
					function senha($errada) {
						
						if($errada) {
							echo "<p>Contraseña incorrecta.</p>";
							sleep(2);
							echo "<script>window.location.href = 'login.php'</script>";
							exit;
						}
						else {
							echo "<script>window.location.href = 'login.php'</script>";
							exit;
						}

					}
						
					?>
                </div>
            </center>
        </div>


	</body>

	<script type="text/javascript" src="../js/cuestionario.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/page_loader.js"></script>

</html>
