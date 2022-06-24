<?php
	// include "../config/connect.php";

	session_start();

	$name = "rfinal";
	$id_set = true;

	if(isset($_POST['subGrafico']))
	{
		if($_POST['id_resposta'] != "")
		{
			$id = $_POST['id_resposta'];
		}
		else if($_POST['email'] != "")
		{
			$email = $_POST['email'];
			$email_set = true;
		}
	}
	else if(isset($_GET['id_resposta']))
	{
		$id = $_GET['id_resposta'];
	}
	else
    {

		$id_set = false;
	}
	
	if($id_set)
	{
		try 
		{
			include "../model/mysql.php";
			
			if($email_set)
			{
				$sql = "SELECT id_resposta FROM $name WHERE email = '$email' AND excluido = 0";
			}
			else
			{
				$sql = "SELECT id_resposta FROM $name WHERE id_resposta = $id AND excluido = 0";
			}
		
			$res = mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn) == 0)
			{
				echo "<script>alert('¡Esta respuesta no existe o ha sido excluida!');
				window.location.href='';</script>";
			}
			else
			{
				if($email_set)
				{
					$row = mysqli_fetch_array($res, MYSQLI_NUM);
					$id = $row[0];
				}

				$a = array();
				$a_str = array("cI1a,cI2a,cI3a,cI4a,cI5a,cI6a", "cII7a,cII8a,cII9a,cII10a,cII11a,cII12a",
				"cIII13a,cIII14a,cIII15a,cIII16a,cIII17a,cIII18a", "cIV19a,cIV20a,cIV21a,cIV22a,cIV23a,cIV24a",
				"cV25a,cV26a,cV27a,cV28a,cV29a,cV30a", "cVI31a,cVI32a,cVI33a,cVI34a,cVI35a,cVI36a",
				"cVII37a,cVII38a,cVII39a,cVII40a,cVII41a,cVII42a");

				for($i = 0; $i < sizeof($a_str); $i++)
				{
					$sql = "SELECT " . $a_str[$i] . " FROM $name WHERE id_resposta = $id";
			
					$res = mysqli_query($conn, $sql);
			
					if(mysqli_affected_rows($conn) > 0)
					{
						$row = mysqli_fetch_array($res, MYSQLI_NUM);
						
						array_push($a, array_sum($row)/sizeof($row));
					}
				}

				$b = array();

				$b_str = array("cI1b,cI2b,cI3b,cI4b,cI5b,cI6b", "cII7b,cII8b,cII9b,cII10b,cII11b,cII12b",
				"cIII13b,cIII14b,cIII15b,cIII16b,cIII17b,cIII18b", "cIV19b,cIV20b,cIV21b,cIV22b,cIV23b,cIV24b",
				"cV25b,cV26b,cV27b,cV28b,cV29b,cV30b", "cVI31b,cVI32b,cVI33b,cVI34b,cVI35b,cVI36b",
				"cVII37b,cVII38b,cVII39b,cVII40b,cVII41b,cVII42b");

				for($i = 0; $i < sizeof($b_str); $i++)
				{
					$sql = "SELECT " . $b_str[$i] . " FROM $name WHERE id_resposta = $id";
			
					$res = mysqli_query($conn, $sql);
			
					if(mysqli_affected_rows($conn) > 0)
					{
						$row = mysqli_fetch_array($res, MYSQLI_NUM);
						
						array_push($b, array_sum($row)/sizeof($row));
					}
				}
			}

		}
		catch (Exception $e)
		{
			$message = $e->getMessage();
			echo "<script>alert('¡Algo salió mal! Más detalles: $message!');
			window.location.href='../';</script>";
		}
	}
?>
	<!DOCTYPE html>


	<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="../style.css?n=1">
		<link rel="stylesheet" href="../main.css?n=1">
		<link rel="stylesheet" href="../cuestionario.css?n=1">
		<link rel="stylesheet" href="style.css?n=1">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
		<script type="text/javascript" src="../js/main.js?n=1"></script>
		<script type="text/javascript" src="../js/grafico1.js?n=1"></script>

		<title>Gráfico - Competencias del Voleibol</title>
	</head>

	<body>

		<?php 
			if($id_set)
			{
				?>
				<form>
					<input type="hidden" name="" id="title" value="<?php echo $title?>">
					<!-- <input type="hidden" name="" id="name" value="<?php echo $name?>"> -->

					<?php $i = 0; ?>
					<input type="hidden" name="" id="Ia" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="IIa" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="IIIa" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="IVa" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="Va" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="VIa" value="<?php echo $a[$i++] ?>">
					<input type="hidden" name="" id="VIIa" value="<?php echo $a[$i] ?>">

					<?php $i = 0; ?>
					<input type="hidden" name="" id="Ib" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="IIb" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="IIIb" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="IVb" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="Vb" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="VIb" value="<?php echo $b[$i++] ?>">
					<input type="hidden" name="" id="VIIb" value="<?php echo $b[$i] ?>">
				</form>
				<?php
			}
		?>


		<div id="conteudo">
			<div class="top show">
				<div class="nav">
					<ul>
						<li><a href="../">Inicio</a></li>
						<li><a href="../cuestionario" id="active">Cuestionario</a></li>
						<li><a href="../info">Informaciones</a></li>
					</ul>
				</div>
			</div>

			<div class="dropdown">
				<div class="title">
					Gráfico
				</div>
				<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
				<div id="" class="dropdown_content">
					<a href="../">Inicio</a>
					<a href="../cuestionario" id="active">Cuestionario</a>
					<a href="../info">Informaciones</a>
				</div>
			</div>

			<center>
				<?php
				if($id_set)
				{
					?>
					<div class="content">
						<br>
						<div class="tesis">
							<h2 style="margin-top: 0;">Gráfico</h2>
						</div>
						

						<div class="legContainer" id="legenda">
							<div>
								<div class="legGrid">
									<div class="box" id="redbox"></div> 
									<div class="legLbl">Evaluación</div>
								</div>
							</div>
							<div>
								<div class="legGrid">
									<div class="box" id="bluebox"></div> 
									<div class="legLbl">Dominio</div>
								</div>
							</div>
						</div>

						<br>
						<div id="grafico">
						</div>
						<button onclick="<?php echo "saveCanvas('Estudio Final - Martina Kieling')"; ?>">
						Descargar gráfico</button>
						<h2>¡Muchas gracias por su colaboración!</h2>

						<p style="margin-bottom: 0">
							<h4 style="text-align: right; margin-top: 0">
							Cordialmente, Martina Kieling, doctoranda.<br>
								<a href="https://www.ub.edu/portal/web/educacion/actividad-fisica-educacion-fisica-y-deporte" target="_blank" class="ared" style="color: #BE1521">Programa de Doctorado en Actividad Física, Educación Física y Deporte - UB</a>

							</h4>
						</p>
					</div>
					<?php
				}
				else 
				{
					?>
					<div class="content">
						<br>
						<div class="tesis">
							<h2 style="margin-bottom: 0;">Gráfico</h2>
							<h3 style="margin-top: 0;" id="maintitle">Recuperar un registro anterior</h3>
						</div>

						<form class="question recupere" method="post">
							<label><b>Buscar por:</b></label> 
							<br>
							<select class="select" id="filtro" onchange="atualizaRecupere()">
								<option value="numero" selected>Número de identificación</option>
								<option value="correo">Correo-electrónico</option>
							</select>
							
							<br><br>

							<div id="numero">
								<label><b>Introduzca el número de identificación:</b></label>
								<br>
								<input type="number" class="value" name="id_resposta" id="numero_input" min="1" step="1"  pattern="[0-9]{10}" required="true">
							</div>

							<div id="correo" style="display: none">
								<label><b>Introduzca el correo-electrónico:</b></label>
								<br>
								<input type="email" class="short" name="email" id="correo_input" maxlength="255">
							</div>
							
							<br><br>
							
							<div class="submitDiv">
								<input type="submit" class="entrar" style="margin: auto" name="subGrafico" value="Enviar">
							</div>
						</form>

						<br>
					</div>
					<?php
				}

				?>
				<div id="rodape" onload="rodape()">@ 2018<br><b>Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</b><br>Sitio desarollado por <a class='neutral' href='https://www.linkedin.com/in/estevaoprolim/' target='_blank'>EstevÃ£o Rolim</a>.</div>
			</center>


		</div>
	</body>

</html>