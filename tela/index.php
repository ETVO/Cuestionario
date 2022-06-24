<?php
	include "../config/connect.php";

	session_start();
	session_destroy();
	session_start();

	$title = 'ValidaciÃ³n de los Ãmbitos';
?>
	<!DOCTYPE html>


	<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="../style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>
		<script type="text/javascript" src="../js/tela.js"></script>

		<title>Tela - Competencias del Voleibol</title>
	</head>

	<body>
		<div id="conteudo">
			<div class="top show">
				<div class="nav">
					<ul>
						<li><a href="../">Inicio</a></li>
						<li><a href="../validacion" id="active">ValidaciÃ³n</a></li>
						<li><a href="../cuestionario">Cuestionario</a></li>
						<li><a href="../info">Informaciones</a></li>
					</ul>
				</div>
			</div>

			<div class="dropdown">
				<div class="title">
					Tela
				</div>
				<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
				<div id="" class="dropdown_content">
					<a href="../">Inicio</a>
					<a href="../validacion" id="active">ValidaciÃ³n</a>
					<a href="../cuestionario">Cuestionario</a>
					<a href="../info">Informaciones</a>
				</div>
			</div>

			<center>
				<div class="content">
					<?php
				if(isset($_POST['subValidacion'])){//veio do questionÃ¡rio
					
						$finalTime = microtime(true);

						$initTime = $_POST['initTime'];
						
						$elapsedTime = $finalTime - $initTime;

						$elapsedTime = $elapsedTime / 60;

						$elapsedTime = round($elapsedTime, 2);

						$arad = $_POST['arad'];
						$acom = utf8_decode($_POST['acom']);

						$brad = $_POST['brad'];
						$bcom = utf8_decode($_POST['bcom']);

						$crad = $_POST['crad'];
						$ccom = utf8_decode($_POST['ccom']);

						$I1rad = $_POST['I1rad'];
						$I1com = utf8_decode($_POST['I1com']);

						$I2rad = $_POST['I2rad'];
						$I2com = utf8_decode($_POST['I2com']);

						$I3rad = $_POST['I3rad'];
						$I3com = utf8_decode($_POST['I3com']);

						$I4rad = $_POST['I4rad'];
						$I4com = utf8_decode($_POST['I4com']);

						$I5rad = $_POST['I5rad'];
						$I5com = utf8_decode($_POST['I5com']);

						$I6rad = $_POST['I6rad'];
						$I6com = utf8_decode($_POST['I6com']);

						$I = (int) ($I1rad + $I2rad + $I3rad + $I4rad + $I5rad + $I6rad)/6;


						$II7rad = $_POST['II7rad'];
						$II7com = utf8_decode($_POST['II7com']);

						$II8rad = $_POST['II8rad'];
						$II8com = utf8_decode($_POST['II8com']);

						$II9rad = $_POST['II9rad'];
						$II9com = utf8_decode($_POST['II9com']);

						$II10rad = $_POST['II10rad'];
						$II10com = utf8_decode($_POST['II10com']);

						$II11rad = $_POST['II11rad'];
						$II11com = utf8_decode($_POST['II11com']);

						$II12rad = $_POST['II12rad'];
						$II12com = utf8_decode($_POST['II12com']);

						$II = (int) ($II7rad + $II8rad + $II9rad + $II10rad + $II11rad + $II12rad)/6;


						$III13rad = $_POST['III13rad'];
						$III13com = utf8_decode($_POST['III13com']);

						$III14rad = $_POST['III14rad'];
						$III14com = utf8_decode($_POST['III14com']);

						$III15rad = $_POST['III15rad'];
						$III15com = utf8_decode($_POST['III15com']);

						$III16rad = $_POST['III16rad'];
						$III16com = utf8_decode($_POST['III16com']);

						$III17rad = $_POST['III17rad'];
						$III17com = utf8_decode($_POST['III17com']);

						$III18rad = $_POST['III18rad'];
						$III18com = utf8_decode($_POST['III18com']);

						$III19rad = $_POST['III19rad'];
						$III19com = utf8_decode($_POST['III19com']);

						$III = (int) ($III13rad + $III14rad + $III15rad + $III16rad + $III17rad + $III18rad + $III19rad)/7;


						$IV20rad = $_POST['IV20rad'];
						$IV20com = utf8_decode($_POST['IV20com']);

						$IV21rad = $_POST['IV21rad'];
						$IV21com = utf8_decode($_POST['IV21com']);

						$IV22rad = $_POST['IV22rad'];
						$IV22com = utf8_decode($_POST['IV22com']);

						$IV23rad = $_POST['IV23rad'];
						$IV23com = utf8_decode($_POST['IV23com']);

						$IV24rad = $_POST['IV24rad'];
						$IV24com = utf8_decode($_POST['IV24com']);

						$IV25rad = $_POST['IV25rad'];
						$IV25com = utf8_decode($_POST['IV25com']);

						$IV26rad = $_POST['IV26rad'];
						$IV26com = utf8_decode($_POST['IV26com']);

						$IV = (int) ($IV20rad + $IV21rad + $IV22rad + $IV23rad + $IV24rad + $IV25rad + $IV26rad)/7;


						$V27rad = $_POST['V27rad'];
						$V27com = utf8_decode($_POST['V27com']);

						$V28rad = $_POST['V28rad'];
						$V28com = utf8_decode($_POST['V28com']);

						$V29rad = $_POST['V29rad'];
						$V29com = utf8_decode($_POST['V29com']);

						$V30rad = $_POST['V30rad'];
						$V30com = utf8_decode($_POST['V30com']);

						$V31rad = $_POST['V31rad'];
						$V31com = utf8_decode($_POST['V31com']);

						$V32rad = $_POST['V32rad'];
						$V32com = utf8_decode($_POST['V32com']);

						$V = (int) ($V27rad + $V28rad + $V29rad + $V30rad + $V31rad + $V32rad)/6;


						$VI33rad = $_POST['VI33rad'];
						$VI33com = utf8_decode($_POST['VI33com']);

						$VI34rad = $_POST['VI34rad'];
						$VI34com = utf8_decode($_POST['VI34com']);

						$VI35rad = $_POST['VI35rad'];
						$VI35com = utf8_decode($_POST['VI35com']);

						$VI36rad = $_POST['VI36rad'];
						$VI36com = utf8_decode($_POST['VI36com']);

						$VI37rad = $_POST['VI37rad'];
						$VI37com = utf8_decode($_POST['VI37com']);

						$VI38rad = $_POST['VI38rad'];
						$VI38com = utf8_decode($_POST['VI38com']);

						$VI = (int) ($VI33rad + $VI34rad + $VI35rad + $VI36rad + $VI37rad + $VI38rad)/6; 


						$VII39rad = $_POST['VII39rad'];
						$VII39com = utf8_decode($_POST['VII39com']);

						$VII40rad = $_POST['VII40rad'];
						$VII40com = utf8_decode($_POST['VII40com']);

						$VII41rad = $_POST['VII41rad'];
						$VII41com = utf8_decode($_POST['VII41com']);

						$VII42rad = $_POST['VII42rad'];
						$VII42com = utf8_decode($_POST['VII42com']);

						$VII43rad = $_POST['VII43rad'];
						$VII43com = utf8_decode($_POST['VII43com']);

						$VII44rad = $_POST['VII44rad'];
						$VII44com = utf8_decode($_POST['VII44com']);

						$VII = (int) ($VII39rad + $VII40rad + $VII41rad + $VII42rad + $VII43rad + $VII44rad)/6;


						$c45rad = $_POST['c45rad'];
						$c45com = utf8_decode($_POST['c45com']);


						$d46rad = $_POST['d46rad'];
						$d46com = utf8_decode($_POST['d46com']);

						$d47rad = $_POST['d47rad'];
						$d47com = utf8_decode($_POST['d47com']);

						$d48rad = $_POST['d48rad'];
						$d48com = utf8_decode($_POST['d48com']);


						$earad = $_POST['earad'];
						$eacom = utf8_decode($_POST['eacom']);

						$ebrad = $_POST['ebrad'];
						$ebcom = utf8_decode($_POST['ebcom']);

						$ecrad = $_POST['ecrad'];
						$eccom = utf8_decode($_POST['eccom']);

						$edrad = $_POST['edrad'];
						$edcom = utf8_decode($_POST['edcom']);

						$eerad = $_POST['eerad'];
						$eecom = utf8_decode($_POST['eecom']);

						$efrad = $_POST['efrad'];
						$efcom = utf8_decode($_POST['efcom']);

						$egrad = $_POST['egrad'];
						$egcom = utf8_decode($_POST['egcom']);

						$ehrad = $_POST['ehrad'];
						$ehcom = utf8_decode($_POST['ehcom']);

						$eirad = $_POST['eirad'];
						$eicom = utf8_decode($_POST['eicom']);

						$comgeral = utf8_decode($_POST['fcom']);
						$name = utf8_decode($_POST['name']);
						$firstname = explode(" ", $name)[0];
						$datastr = $_POST['data_nasc'];
						$data = explode("/", $datastr);
						$datanasc = "$data[2]-$data[1]-$data[0]";
						
						/*$to = 'projectesporting@gmail.com';
						$subject = "$firstname acaba de responder a la ValidaciÃ³n";
						$message = "$name (id: $id) tomÃ³ $elapsedTime minutos para responder a la ValidaciÃ³n del cuestionario.";
						$headers = 'From: noreply@voleibol-competencias.com';
						
						mail($to, $subject, $message, $headers);*/


						$isql = "INSERT INTO validacion VALUES (DEFAULT, $elapsedTime, DEFAULT, '$name', '$datanasc', $arad, '$acom', $brad, '$bcom', $crad, '$ccom', $I1rad, '$I1com', $I2rad, '$I2com', $I3rad, '$I3com', $I4rad, '$I4com', $I5rad, '$I5com', $I6rad, '$I6com', $II7rad, '$II7com', $II8rad, '$II8com', $II9rad, '$II9com', $II10rad, '$II10com', $II11rad, '$II11com', $II12rad, '$II12com', $III13rad, '$III13com', $III14rad, '$III14com', $III15rad, '$III15com', $III16rad, '$III16com', $III17rad, '$III17com', $III18rad, '$III18com', $III19rad, '$III19com', $IV20rad, '$IV20com', $IV21rad, '$IV21com', $IV22rad, '$IV22com', $IV23rad, '$IV23com', $IV24rad, '$IV24com', $IV25rad, '$IV25com', $IV26rad, '$IV26com', $V27rad, '$V27com', $V28rad, '$V28com', $V29rad, '$V29com', $V30rad, '$V30com', $V31rad, '$V31com', $V32rad, '$V32com', $VI33rad, '$VI33com', $VI34rad, '$VI34com', $VI35rad, '$VI35com', $VI36rad, '$VI36com', $VI37rad, '$VI37com', $VI38rad, '$VI38com', $VII39rad, '$VII39com', $VII40rad, '$VII40com', $VII41rad, '$VII41com', $VII42rad, '$VII42com', $VII43rad, '$VII43com', $VII44rad, '$VII44com', $c45rad, '$c45com', $d46rad, '$d46com', $d47rad, '$d47com', $d48rad, '$d48com', $earad, '$eacom', $ebrad, '$ebcom', $ecrad, '$eccom', $edrad, '$edcom', $eerad, '$eecom', $efrad, '$efcom', $egrad, '$egcom', $ehrad, '$ehcom', $eirad, '$eicom', '$comgeral', $I, $II, $III, $IV, $V, $VI, $VII);";
					
						// echo "<h1>$isql</h1>";
						$result = pg_query($conecta, $isql);
						$linhas = pg_affected_rows($result);
						if($linhas > 0){
							echo '<form><input type="hidden" id="I" value="'.$I.'">';
							echo '<input type="hidden" id="II" value="'.$II.'">';
							echo '<input type="hidden" id="III" value="'.$III.'">';
							echo '<input type="hidden" id="IV" value="'.$IV.'">';
							echo '<input type="hidden" id="V" value="'.$V.'">';
							echo '<input type="hidden" id="VI" value="'.$VI.'">';
							echo '<input type="hidden" id="VII" value="'.$VII.'">';
							echo '<input type="hidden" id="name" value="'.$name.'">';
							echo '<input type="hidden" id="title" value="'.$title.'"></form>';

							?>
						<h2>Â¡Muchas gracias,
							<?php echo explode(" ", $name)[0]?>!</h2>
							<p>
					Estimado evaluador, estimada evaluadora: El grÃ¡fico generado es solamente una prueba para el cuestionario final, en este momento no tiene valor interpretativo.
					<br><br> Caso ha encontrado alguna dificultad en el momento de validar el cuestionario vÃ­a esa web (algÃºn error o pÃ©rdida de conexiÃ³n) por favor contacta con martinarolim@gmail.com
					</p>
						<h3>Â¡Agradecemos enormemente la colaboraciÃ³n!<br>AquÃ­ estÃ¡ su grÃ¡fico:</h3>

						<?php
							
							echo '<center><div id="tela"></div>
							<button onclick="saveCanvas(\'validacion_'.explode(" ", $name)[0].'.jpg\');">Descargar grÃ¡fico</button>
							</center>';
						}
						else{ 
							echo '<h2>Â¡Algo saliÃ³ mal!</h2>
						<h3>Sus respuestas no pudieron ser registradas.<br>Â¡IntÃ©ntelo de nuevo mÃ¡s tarde!</h3>';
						}
				}
				else{
					echo '<h2>Â¡No disponible!</h2>
					<h3>Usted debe realizar la <a href="../validacion/">ValidaciÃ³n</a> para tener acceso a su grÃ¡fico.</h3>';
				}
					?>

				</div>
				<div id="rodape" onload="rodape()">@ 2018<br><b>Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</b><br>Sitio desarollado por <a class='neutral' href='https://www.linkedin.com/in/estev%C3%A3o-rolim-b67bb1145/' target='_blank'>EstevÃ£o Rolim</a>.</div>
			</center>


		</div>
	</body>

	</html>
