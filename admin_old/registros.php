<?php
    session_start();
	
	include "../util/util.php";

    if(!isset($_SESSION['adminMD5'])) {
		echo "<script>window.location.href = 'login.php'</script>";
		exit;
	} 
	else if($_SESSION['adminMD5'] != getSenha()) {
		echo "<script>window.location.href = 'login.php'</script>";
		exit;
	}

	include "../model/mysql.php";

	$tablename = "rfinal";

	if(isset($_GET['exc'])) {
		$exc = $_GET['exc'];

		if(isset($_GET['excto'])) {
			$excto = $_GET['excto'];
		}
		else {
			$sql = "SELECT excluido FROM $tablename WHERE id_resposta = $exc";

			$res = mysqli_query($conn, $sql);

			if($row = mysqli_fetch_array($res)) {
				$excto = $row[0];
			}
		}
		
		$sql = "UPDATE $tablename SET excluido = $excto WHERE id_resposta = $exc";

		$res = mysqli_query($conn, $sql);

		echo "<script>window.location.href = 'registros.php'</script>";
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
		<title>Registros - Competencias del Voleibol</title>
	</head>



	<body>
		<div id="conteudo">
			
			<center>
			<div class="content">

				<?php 
					$session = substr($_SESSION['adminMD5'], 0, 6);
					echo "<p><small>Sesión: $session</small></p>";
				?>
				<h2 style="margin-bottom: 0; text-align: left">Administración</h2>
				<h3 style="margin-top: 0; text-align: left">Todos los Registros</h3>
				<p class="admActions">
				</p>
		
				<table class="admRegistros">
					<caption class="admActions">
						<a href="r/rfinal.php" download>Descargar en formato .csv</a>
					</caption>
					<tr class="registrosHeader">
						<th>Id</th>
						<th>Fecha</th>
						<th>Ubicación</th>
						<th>Email</th>
						<th>Acciones</th>
						<th>Excluido?</th>
					</tr>
					<?php
						try {

							$exc = 0;
							
							$sql = "SELECT id_resposta, DATE_FORMAT(inicio, \"%d/%m/%Y\") AS fecha, ubica, email, excluido FROM rfinal";

							$res = mysqli_query($conn, $sql);

							while($row = mysqli_fetch_array($res)) {

								$id = $row['id_resposta'];
								$fecha = $row['fecha'];
								$ubica = utf8_encode($row['ubica']); 
								$email = $row['email'];
								$excluido = $row['excluido'];

								?>
									<tr <?php echo ($excluido) ? "class='trExcluido'" : ""; ?>>
										<td>
											<?php echo $id; ?>
										</td>
										<td>
											<?php echo $fecha; ?>
										</td>
										<td>
											<?php echo $ubica; ?>
										</td>
										<td class="mail">
											<?php 
												if($email != "") echo "<a href='mailto:$email' target='_blank'>$email</a>";
											?>	
										</td>
										<td class="acciones">
											<a href="?exc=<?php echo $id; ?>&excto=<?php echo ($excluido) ? "0" : "1"; ?>"><?php echo ($excluido) ? "Restaurar" : "Excluir" ?></a>
											|
											<a href="recuperar_grafico.php?id_resposta=<?php echo $id; ?>" target="_blank">Ver gráfico</a>
										</td>
										<td>
											<?php 
												echo ($excluido) ? "Si" : "No";
											?>
										</td>
									</tr>
								<?php
							}
						}
						catch(Exception $e) {
							$message = $e->getMessage();
							echo "<script>alert('¡Algo salió mal! Más detalles: $message!');
							window.location.href='index.php';</script>";
						}
					?>
				</table>

                <hr>
				<p class="admActions">
					<a href="registros.php">Actualizar</a>
					<br>
					<a href="#" onclick="window.close()">Cerrar ventana</a>
                    <br>
					<a href="index.php">Volver a Admin</a>
                    <br>
					<a href="endsession.php">Finalizar sesión</a>
				</p>
			</div>
			</center>
        </div>


	</body>

	<script type="text/javascript" src="../js/cuestionario.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/page_loader.js"></script>

</html>