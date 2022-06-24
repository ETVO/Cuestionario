<!DOCTYPE html>
<?php
	// include "../config/connect.php";

	session_start();
	session_destroy();
	session_start();
?>


	<html lang="pt-br">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>
		<meta charset="UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
		<script type="text/javascript" src="../js/main.js"></script>

		<link rel="stylesheet" type="text/css" href="../style.css">
		<title>Validación - Competencias del Voleibol</title>
	</head>



	<body>
		<div id="conteudo">
			<div class="head"></div>
			<div class="top show">
				<div class="nav">
					<ul>
						<li><a href="../">Inicio</a></li>
						<li><a href="" id="active">Validación</a></li>
						<li><a href="../cuestionario">Cuestionario</a></li>
						<li><a href="../info">Informaciones</a></li>
					</ul>
				</div>
			</div>

			<div class="dropdown">
				<div class="title">
					Validación
				</div>
				<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
				<div id="" class="dropdown_content">
					<a href="../">Inicio</a>
					<a href="" id="active">Validación</a>
					<a href="../cuestionario">Cuestionario</a>
					<a href="../info">Informaciones</a>
				</div>
			</div>

			<center>


				<div class="content">
					<h2 style="margin-bottom: 0;">Validación del Cuestionario</h2>
					<h3 style="margin-top: 0;">Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</h3>

					<?php
						
					if(isset($_POST['senha'])){
						$senha = $_POST['senha'];
						
						if(strcmp($senha, "Tese2018") == 0){
							
							?>

						<form action="http://voleibol-competencias.com/tela/" method="post" class="query" id="validacion">
							<p>
								Estimado entrenador evaluador, Estimada entrenadora evaluadora,
								<br><br> Con este documento solicitamos que colabore en la validación del cuestionario que será enviado próximamente a entrenadores y entrenadoras de voleibol de todo el Estado español como parte de mi tesis doctoral. El cuestionario fue construido tras entrevistas exploratorias y la revisión de la literatura y tiene el objetivo de ayudar a identificar las competencias profesionales bien como las necesidades formativas de dichos entrenadores.
								<br><br> Para el proceso de validación le pedimos que lea atentamente la pregunta y acto seguido rellene su valoración sobre la claridad del redactado de cada pregunta y también añadir comentarios si lo ve necesario. <b>No debe responder a la pregunta, sólo valorar el grado de claridad de esta.</b>
								<br><br> Para validar el cuestionario, por favor tenga en cuenta la siguiente escala:
							</p>

							<center>
								<table class="escala">
									<tr>
										<th>
											Claridad
										</th>
									</tr>

									<tr>
										<td>
											<div class="optsEscala">
												<label>
									<b>1</b><br>Muy confusa
								</label>

												<label>
									<b>2</b><br>Confusa
								</label>

												<label>
									<b>3</b><br>Poco clara
								</label>

												<label>
									<b>4</b><br>Clara
								</label>

												<label>
									<b>5</b><br>Totalmente clara
								</label>
											</div>
										</td>
									</tr>
								</table>
							</center>

							<p>
								Nos comprometemos a preservar el anonimato de sus valoraciones y éstas sólo serán tratadas por los investigadores. El uso que se hará de dicha información es puramente científico y sólo figurará, si no nos dice lo contrario, como experto/a que ha participado en este estudio.
								<br><br>Estamos a disposición para cualquier comentario o aclariación a través el siguiente e-mail:
								<br><a href="mailto:martinarolim@gmail.com?Subject=Doctorado%20-%20Voleibol%20Competencias">martinarolim@gmail.com</a> o teléfono: 605 426 904
								<br><br>¡Muchas gracias!
							</p>

							<h3 class="titApartado"><b>A.</b> El Consentimiento Informado</h3>
							<hr class="apartado">

							<div class="aviso">
								<div style="display: flex; text-align: center;">
									<img alt="¡Atención!" class="imgInfo" src="../imgs/info.png">
								</div>

								<div>
									<b>Estimado/a evaluador/a:</b><br>El consentimiento a continuación es para el cuestionario final, ahora sólo necesitamos que nos diga si lo ve comprensible, indicando el grado de claridad de su redactado.
								</div>
							</div>

							<input type="hidden" name="initTime" value="<?php echo microtime(true) ?>">

							<div id="apartadoA_presenta">
								<h3>CONSENTIMIENTO INFORMADO POR ESCRITO - PARTICIPANTES EN EL CUESTIONARIO DEL ESTUDIO INTITULADO:</h3>
								<h2 style="color:#c78009;">“Las competencias profesionales y las necesidades formativas del entrenador de voleibol implicado en el deporte en edad escolar”</h2>
								<br>
								<div class="half_grid">
									<div>
										<h4>Investigador:<br><span style="font-weight: normal">Martina Kieling Sebold Barros Rolim</span></h4>
									</div>
									<div>
										<h4>Firma del investigador:</h4>
										<div>
											<img src="../imgs/firma.png" alt="" style="height: 50px;">
										</div>
									</div>
								</div>
							</div>

							<p>
								El objetivo de esta información es ayudarle a tomar la decisión de participar en nuestra investigación.
								<br><br> Inicialmente deberá contestar una encuesta respecto a su grado de concordancia sobre las competencias de los entrenadores y entrenadoras de voleibol implicados en el deporte en edad escolar y también sobre el grado del dominio de esa competencia.
								<br><br>La información que nos brinde será tratada de manera confidencial y anónima. En ningún caso sus respuestas serán presentadas o acompañadas de su nombre o de algún dato que le identifique. Su participación es totalmente voluntaria y puede darla por terminada en cualquier momento. Asimismo, puede plantear todas sus dudas respecto a la investigación antes, durante y después de su participación al mail:
								<br><b><a href="mailto:martina@voleibol-competencias.com?Subject=Validaci%C3%B3n%20del%20Cuestionario">martina@voleibol-competencias.com</a></b>
							</p>

							<center>
								<div class="half_grid consente" onclick="alert('El consentimiento es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible.')">
									<label for="acepta">
						<b style="color: #26b11a;">Acepto</b> participar del estudio<br>
					</label>
									<label for="no_acepta">
						<b>No acepto</b> participar del estudio<br>
					</label>
								</div>
							</center>

							<p style="text-align: right">
								Le damos las gracias por anticipado por su tiempo y su compromiso con este proyecto<br>
							</p>

							<center>
								<div class="valida">
									<table>
										<tr>
											<th>
												<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
											</th>
										</tr>

										<tr>
											<td>
												<div class="opts">
													<label for="arad1">
										<b>1</b><br><input type="radio" name="arad" value="1" id="arad1" required>
									</label>

													<label for="arad2">
										<b>2</b><br><input type="radio" name="arad" value="2" id="arad2">
									</label>

													<label for="arad3">
										<b>3</b><br><input type="radio" name="arad" value="3" id="arad3">
									</label>

													<label for="arad4">
										<b>4</b><br><input type="radio" name="arad" value="4" id="arad4">
									</label>

													<label for="arad5">
										<b>5</b><br><input type="radio" name="arad" value="5" id="arad5">
									</label>
												</div>
											</td>
										</tr>
									</table>
									<table>
										<tr>
											<th>
												Comentarios <b>(opcional)</b>
											</th>
										</tr>

										<tr>
											<td>
												<textarea name="acom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
											</td>
										</tr>
									</table>
								</div>
							</center>

							<h3 class="titApartado"><b>B.</b> Orientaciones para responder el cuestionario</h3>
							<hr class="apartado">

							<div class="aviso">
								<div style="display: flex; text-align: center;">
									<img alt="¡Atención!" class="imgInfo" src="../imgs/info.png">
								</div>

								<div>
									<b>Estimado/a evaluador/a:</b><br> Esta orientación es para el cuestionario final, ahora sólo necesitamos que nos diga si la ve comprensible
								</div>
							</div>


							<p>
								A continuación se enumeran diversas competencias necesarias para el ejercicio de entrenador o entrenadora de voleibol indoor, que surgen de una investigación anterior y de la bibliografía consultada.
							</p>

							<center>
								<div class="destaque">
									<i>
							La definición de competencia, para ese estudio, será, en un sentido amplio: <b>“realizar una actividad con eficiencia en un contexto dado”</b> (Gámez, 2005) y en un sentido más específico: tener un <b>“repertorio de comportamientos que conllevan todo un conjunto de conocimientos, procedimientos y actitudes combinados, coordinados e integrados, en el sentido de que el individuo debe saber hacer y saber estar para la tarea que se le solicita”</b> (Lévy-Leboyer, 2003)
						</i>
								</div>

								<div class="destaque">
									<i>
							Quizás le interesa aclarar el término “deporte escolar”. Nosotros coincidimos con los autores Gómez y García (1993) que lo definen como: “Toda actividad físico-deportiva realizada por niños/as jóvenes en edad escolar, dentro o fuera del centro escolar, incluso la desarrollada en el ámbito de clubs o de otras entidades públicas o privadas, considerando, por lo tanto, <b>deporte escolar como sinónimo de deporte en edad escolar</b>” 
						</i>
								</div>
							</center>

							<p>
								Teniendo en cuenta esas definiciones, solicitamos que determine el grado de importancia que usted atribuye a cada competencia descrita a continuación, así como a la percepción de su dominio sobre la misma. El orden presentado es aleatorio y no tiene relación con la importancia o jerarquía de esas competencias.
							</p>

							<hr>

							<div class="question niveis" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible')">
								<p>Antes de iniciar, por favor, indique a qué NIVEL de equipo-jugadores/as se refieren sus respuestas. Si actúa o ha actuado en diferentes niveles, le pedimos que responda de acuerdo con el nivel que <b>tiene más experiencia o afinidad</b></p>

								<label for="nivel1">Entrenador/a de <u>jugadores debutantes o principiantes</u>:<p>En equipos que, independientemente de la edad, están en su primer o segundo año de experiencia con la modalidad y utilizan sistemas tácticos básicos.</p></label>

								<label for="nivel2">Entrenador/a de <u>jugadores iniciados</u>:<p>En equipos que, independientemente la edad, ya tienen alguna experiencia y están perfeccionando y variando sus habilidades. Utilizan sistemas tácticos intermediarios.</p></label>

								<label for="nivel3">Entrenador/a de <u>jugadores experimentados</u>:<p>En equipos que, independientemente la edad, tienen bien dominado los fundamentos y técnicas básicos y están refinando sus habilidades con rigor y precisión. Utilizan sistemas tácticos intermediarios o avanzados y con sus variaciones.</p></label>
							</div>

							<center>
								<div class="valida">
									<table>
										<tr>
											<th>
												<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
											</th>
										</tr>

										<tr>
											<td>
												<div class="opts">
													<label for="brad1">
										<b>1</b><br><input type="radio" name="brad" value="1" id="brad1" required>
									</label>

													<label for="brad2">
										<b>2</b><br><input type="radio" name="brad" value="2" id="brad2">
									</label>

													<label for="brad3">
										<b>3</b><br><input type="radio" name="brad" value="3" id="brad3">
									</label>

													<label for="brad4">
										<b>4</b><br><input type="radio" name="brad" value="4" id="brad4">
									</label>

													<label for="brad5">
										<b>5</b><br><input type="radio" name="brad" value="5" id="brad5">
									</label>
												</div>
											</td>
										</tr>
									</table>
									<table>
										<tr>
											<th>
												Comentarios <b>(opcional)</b>
											</th>
										</tr>

										<tr>
											<td>
												<textarea name="bcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
											</td>
										</tr>
									</table>
								</div>
							</center>



							<h3 class="titApartado"><b>C.</b> Evaluación de las competencias y dominio sobre esas competencias</h3>
							<hr class="apartado">

							<div class="aviso">
								<div style="display: flex; text-align: center;">
									<img alt="¡Atención!" class="imgInfo" src="../imgs/info.png">
								</div>

								<div>
									<b>Estimado/a evaluador/a:</b><br> En el cuestionario final los y las entrenadores/as verán las preguntas de acuerdo con el ejemplo a continuación, por favor, diga si lo ve comprensible
								</div>
							</div>

							<div class="p">
								Considerando su experiencia como entrenador o entrenadora de voleibol indique del 1 al 5 cómo valora las competencias a continuación con relación a:
								<ul>
									<li><b>a.</b> La importancia que da usted para la labor del entrenador de voleibol en edad escolar</li>
									<li><b>b.</b> La percepción sobre su dominio de esa competencia</li>
								</ul>
							</div>

							<center>
								<a href="../imgs/modelo_apC.png"><img src="../imgs/modelo_apC.png" title="Haga clic para ver la imagen con mejor resolución" alt="Modelo Ámbito/Competencia" id="modelo_apC"></a>
							</center>

							<center>
								<div class="valida">
									<table>
										<tr>
											<th>
												<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
											</th>
										</tr>

										<tr>
											<td>
												<div class="opts">
													<label for="crad1">
										<b>1</b><br><input type="radio" name="crad" value="1" id="crad1" required>
									</label>

													<label for="crad2">
										<b>2</b><br><input type="radio" name="crad" value="2" id="crad2">
									</label>

													<label for="crad3">
										<b>3</b><br><input type="radio" name="crad" value="3" id="crad3">
									</label>

													<label for="crad4">
										<b>4</b><br><input type="radio" name="crad" value="4" id="crad4">
									</label>

													<label for="crad5">
										<b>5</b><br><input type="radio" name="crad" value="5" id="crad5">
									</label>
												</div>
											</td>
										</tr>
									</table>

									<table>
										<tr>
											<th>
												Comentarios <b>(opcional)</b>
											</th>
										</tr>

										<tr>
											<td>
												<textarea name="ccom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
											</td>
										</tr>
									</table>
								</div>
							</center>

							<h3 style="margin-bottom: -10px; margin-top: 30px;">Validación de las competencias</h3>
							<hr>


							<center>

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>I.</b> Planificar reflexivamente</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">
										<div class="competAmb cellAmb">
											<b>1.</b> Planificar la temporada teniendo en cuenta las variables de los/las jugadores/as, equipo, club y competición, estableciendo objetivos a corto, medio y largo plazo.
										</div>

										<div class="optsAmb cellAmb">
											<h4 class="showMobile">
												<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
											</h4>
											<div class="opts">
												<label for="I1rad1">
							<b>1</b><br><input type="radio" name="I1rad" value="1" id="I1rad1" required>
						</label>

												<label for="I1rad2">
							<b>2</b><br><input type="radio" name="I1rad" value="2" id="I1rad2">
						</label>

												<label for="I1rad3">
							<b>3</b><br><input type="radio" name="I1rad" value="3" id="I1rad3">
						</label>

												<label for="I1rad4">
							<b>4</b><br><input type="radio" name="I1rad" value="4" id="I1rad4">
						</label>

												<label for="I1rad5">
							<b>5</b><br><input type="radio" name="I1rad" value="5" id="I1rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile">
												<label for="">Comentarios <b>(opcional)</b></label>
											</h4>
											<textarea name="I1com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>2.</b> Hacer una periodización completa (física, técnica, táctica y psicológica o actitudinal) para la temporada.
										</div>

										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="I2rad1">
							<b>1</b><br><input type="radio" name="I2rad" value="1" id="I2rad1" required>
						</label>

												<label for="I2rad2">
							<b>2</b><br><input type="radio" name="I2rad" value="2" id="I2rad2">
						</label>

												<label for="I2rad3">
							<b>3</b><br><input type="radio" name="I2rad" value="3" id="I2rad3">
						</label>

												<label for="I2rad4">
							<b>4</b><br><input type="radio" name="I2rad" value="4" id="I2rad4">
						</label>

												<label for="I2rad5">
							<b>5</b><br><input type="radio" name="I2rad" value="5" id="I2rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="I2com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>3.</b> Planificar las cargas de trabajo de acuerdo con los objetivos del equipo o jugador/a.
										</div>

										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="I3rad1">
							<b>1</b><br><input type="radio" name="I3rad" value="1" id="I3rad1" required>
						</label>

												<label for="I3rad2">
							<b>2</b><br><input type="radio" name="I3rad" value="2" id="I3rad2">
						</label>

												<label for="I3rad3">
							<b>3</b><br><input type="radio" name="I3rad" value="3" id="I3rad3">
						</label>

												<label for="I3rad4">
							<b>4</b><br><input type="radio" name="I3rad" value="4" id="I3rad4">
						</label>

												<label for="I3rad5">
							<b>5</b><br><input type="radio" name="I3rad" value="5" id="I3rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="I3com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>4.</b> Programar actividades de aprendizaje de acuerdo con los contenidos y objetivos de la planificación.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="I4rad1">
							<b>1</b><br><input type="radio" name="I4rad" value="1" id="I4rad1" required>
						</label>

												<label for="I4rad2">
							<b>2</b><br><input type="radio" name="I4rad" value="2" id="I4rad2">
						</label>

												<label for="I4rad3">
							<b>3</b><br><input type="radio" name="I4rad" value="3" id="I4rad3">
						</label>

												<label for="I4rad4">
							<b>4</b><br><input type="radio" name="I4rad" value="4" id="I4rad4">
						</label>

												<label for="I4rad5">
							<b>5</b><br><input type="radio" name="I4rad" value="5" id="I4rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="I4com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>5.</b> Adaptar la programación a las necesidades individuales de cada jugador/a
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="I5rad1">
							<b>1</b><br><input type="radio" name="I5rad" value="1" id="I5rad1" required>
						</label>

												<label for="I5rad2">
							<b>2</b><br><input type="radio" name="I5rad" value="2" id="I5rad2">
						</label>

												<label for="I5rad3">
							<b>3</b><br><input type="radio" name="I5rad" value="3" id="I5rad3">
						</label>

												<label for="I5rad4">
							<b>4</b><br><input type="radio" name="I5rad" value="4" id="I5rad4">
						</label>

												<label for="I5rad5">
							<b>5</b><br><input type="radio" name="I5rad" value="5" id="I5rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="I5com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>6.</b> Gestionar la plantilla de jugadores/as antes, durante y después de los entrenos y partidos (convocatorias, promoción, etc.).
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="I6rad1">
							<b>1</b><br><input type="radio" name="I6rad" value="1" id="I6rad1" required>
						</label>

												<label for="I6rad2">
							<b>2</b><br><input type="radio" name="I6rad" value="2" id="I6rad2">
						</label>

												<label for="I6rad3">
							<b>3</b><br><input type="radio" name="I6rad" value="3" id="I6rad3">
						</label>

												<label for="I6rad4">
							<b>4</b><br><input type="radio" name="I6rad" value="4" id="I6rad4">
						</label>

												<label for="I6rad5">
							<b>5</b><br><input type="radio" name="I6rad" value="5" id="I6rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="I6com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>II.</b> Gestionar las sesiones de entrenamientos y partidos</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>7.</b> Controlar las variables que interfieren las sesiones de entreno o partidos (tiempo, materiales, conflictos, entre otros).
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II7rad1">
							<b>1</b><br><input type="radio" name="II7rad" value="1" id="II7rad1" required>
						</label>

												<label for="II7rad2">
							<b>2</b><br><input type="radio" name="II7rad" value="2" id="II7rad2">
						</label>

												<label for="II7rad3">
							<b>3</b><br><input type="radio" name="II7rad" value="3" id="II7rad3">
						</label>

												<label for="II7rad4">
							<b>4</b><br><input type="radio" name="II7rad" value="4" id="II7rad4">
						</label>

												<label for="II7rad5">
							<b>5</b><br><input type="radio" name="II7rad" value="5" id="II7rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II7com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>8.</b> Gestionar las cargas de trabajo de acuerdo con los objetivos del equipo o jugador/a y adaptarlas de acuerdo con las necesidades
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II8rad1">
							<b>1</b><br><input type="radio" name="II8rad" value="1" id="II8rad1" required>
						</label>

												<label for="II8rad2">
							<b>2</b><br><input type="radio" name="II8rad" value="2" id="II8rad2">
						</label>

												<label for="II8rad3">
							<b>3</b><br><input type="radio" name="II8rad" value="3" id="II8rad3">
						</label>

												<label for="II8rad4">
							<b>4</b><br><input type="radio" name="II8rad" value="4" id="II8rad4">
						</label>

												<label for="II8rad5">
							<b>5</b><br><input type="radio" name="II8rad" value="5" id="II8rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II8com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>9.</b> Gestionar las cargas de trabajo a los jugadores/as en rehabilitación de una lesión deportiva.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II9rad1">
							<b>1</b><br><input type="radio" name="II9rad" value="1" id="II9rad1" required>
						</label>

												<label for="II9rad2">
							<b>2</b><br><input type="radio" name="II9rad" value="2" id="II9rad2">
						</label>

												<label for="II9rad3">
							<b>3</b><br><input type="radio" name="II9rad" value="3" id="II9rad3">
						</label>

												<label for="II9rad4">
							<b>4</b><br><input type="radio" name="II9rad" value="4" id="II9rad4">
						</label>

												<label for="II9rad5">
							<b>5</b><br><input type="radio" name="II9rad" value="5" id="II9rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II9com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>10.</b> Prestar primeros auxilios en situaciones de lesión durante entrenamiento y partidos
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II10rad1">
							<b>1</b><br><input type="radio" name="II10rad" value="1" id="II10rad1" required>
						</label>

												<label for="II10rad2">
							<b>2</b><br><input type="radio" name="II10rad" value="2" id="II10rad2">
						</label>

												<label for="II10rad3">
							<b>3</b><br><input type="radio" name="II10rad" value="3" id="II10rad3">
						</label>

												<label for="II10rad4">
							<b>4</b><br><input type="radio" name="II10rad" value="4" id="II10rad4">
						</label>

												<label for="II10rad5">
							<b>5</b><br><input type="radio" name="II10rad" value="5" id="II10rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II10com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>11.</b> Evaluar y gestionar la estrategia del propio equipo en consecuencia del análisis del equipo contrario antes y durante los partidos.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II11rad1">
							<b>1</b><br><input type="radio" name="II11rad" value="1" id="II11rad1" required>
						</label>

												<label for="II11rad2">
							<b>2</b><br><input type="radio" name="II11rad" value="2" id="II11rad2">
						</label>

												<label for="II11rad3">
							<b>3</b><br><input type="radio" name="II11rad" value="3" id="II11rad3">
						</label>

												<label for="II11rad4">
							<b>4</b><br><input type="radio" name="II11rad" value="4" id="II11rad4">
						</label>

												<label for="II11rad5">
							<b>5</b><br><input type="radio" name="II11rad" value="5" id="II11rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II11com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>12.</b> Evaluar los efectos de las actividades programadas, teniendo en cuenta los objetivos programados.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="II12rad1">
							<b>1</b><br><input type="radio" name="II12rad" value="1" id="II12rad1" required>
						</label>

												<label for="II12rad2">
							<b>2</b><br><input type="radio" name="II12rad" value="2" id="II12rad2">
						</label>

												<label for="II12rad3">
							<b>3</b><br><input type="radio" name="II12rad" value="3" id="II12rad3">
						</label>

												<label for="II12rad4">
							<b>4</b><br><input type="radio" name="II12rad" value="4" id="II12rad4">
						</label>

												<label for="II12rad5">
							<b>5</b><br><input type="radio" name="II12rad" value="5" id="II12rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="II12com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>III.</b> Saber enseñar la modalidad</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>13.</b> Aplicar nociones básicas de la preparación física adaptados a la edad y el género del/la practicante.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III13rad1">
							<b>1</b><br><input type="radio" name="III13rad" value="1" id="III13rad1" required>
						</label>

												<label for="III13rad2">
							<b>2</b><br><input type="radio" name="III13rad" value="2" id="III13rad2">
						</label>

												<label for="III13rad3">
							<b>3</b><br><input type="radio" name="III13rad" value="3" id="III13rad3">
						</label>

												<label for="III13rad4">
							<b>4</b><br><input type="radio" name="III13rad" value="4" id="III13rad4">
						</label>

												<label for="III13rad5">
							<b>5</b><br><input type="radio" name="III13rad" value="5" id="III13rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III13com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>14.</b> Aplicar metodologías específicas para la enseñanza de los deportes.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III14rad1">
							<b>1</b><br><input type="radio" name="III14rad" value="1" id="III14rad1" required>
						</label>

												<label for="III14rad2">
							<b>2</b><br><input type="radio" name="III14rad" value="2" id="III14rad2">
						</label>

												<label for="III14rad3">
							<b>3</b><br><input type="radio" name="III14rad" value="3" id="III14rad3">
						</label>

												<label for="III14rad4">
							<b>4</b><br><input type="radio" name="III14rad" value="4" id="III14rad4">
						</label>

												<label for="III14rad5">
							<b>5</b><br><input type="radio" name="III14rad" value="5" id="III14rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III14com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>15.</b> Aplicar nociones de psicología del deporte.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III15rad1">
							<b>1</b><br><input type="radio" name="III15rad" value="1" id="III15rad1" required>
						</label>

												<label for="III15rad2">
							<b>2</b><br><input type="radio" name="III15rad" value="2" id="III15rad2">
						</label>

												<label for="III15rad3">
							<b>3</b><br><input type="radio" name="III15rad" value="3" id="III15rad3">
						</label>

												<label for="III15rad4">
							<b>4</b><br><input type="radio" name="III15rad" value="4" id="III15rad4">
						</label>

												<label for="III15rad5">
							<b>5</b><br><input type="radio" name="III15rad" value="5" id="III15rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III15com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>16.</b> Enseñar el reglamento oficial de la modalidad.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III16rad1">
							<b>1</b><br><input type="radio" name="III16rad" value="1" id="III16rad1" required>
						</label>

												<label for="III16rad2">
							<b>2</b><br><input type="radio" name="III16rad" value="2" id="III16rad2">
						</label>

												<label for="III16rad3">
							<b>3</b><br><input type="radio" name="III16rad" value="3" id="III16rad3">
						</label>

												<label for="III16rad4">
							<b>4</b><br><input type="radio" name="III16rad" value="4" id="III16rad4">
						</label>

												<label for="III16rad5">
							<b>5</b><br><input type="radio" name="III16rad" value="5" id="III16rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III16com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>17.</b> Utilizar las nuevas tecnologías aplicadas a la enseñanza de los deportes.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III17rad1">
							<b>1</b><br><input type="radio" name="III17rad" value="1" id="III17rad1" required>
						</label>

												<label for="III17rad2">
							<b>2</b><br><input type="radio" name="III17rad" value="2" id="III17rad2">
						</label>

												<label for="III17rad3">
							<b>3</b><br><input type="radio" name="III17rad" value="3" id="III17rad3">
						</label>

												<label for="III17rad4">
							<b>4</b><br><input type="radio" name="III17rad" value="4" id="III17rad4">
						</label>

												<label for="III17rad5">
							<b>5</b><br><input type="radio" name="III17rad" value="5" id="III17rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III17com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>18.</b> Crear y aplicar modelos de juego (táctica colectiva e individual) de acuerdo con las características individuales y del equipo.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III18rad1">
							<b>1</b><br><input type="radio" name="III18rad" value="1" id="III18rad1" required>
						</label>

												<label for="III18rad2">
							<b>2</b><br><input type="radio" name="III18rad" value="2" id="III18rad2">
						</label>

												<label for="III18rad3">
							<b>3</b><br><input type="radio" name="III18rad" value="3" id="III18rad3">
						</label>

												<label for="III18rad4">
							<b>4</b><br><input type="radio" name="III18rad" value="4" id="III18rad4">
						</label>

												<label for="III18rad5">
							<b>5</b><br><input type="radio" name="III18rad" value="5" id="III18rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III18com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>19.</b> Identificar errores y ofrecer retroalimentación.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="III19rad1">
							<b>1</b><br><input type="radio" name="III19rad" value="1" id="III19rad1" required>
						</label>

												<label for="III19rad2">
							<b>2</b><br><input type="radio" name="III19rad" value="2" id="III19rad2">
						</label>

												<label for="III19rad3">
							<b>3</b><br><input type="radio" name="III19rad" value="3" id="III19rad3">
						</label>

												<label for="III19rad4">
							<b>4</b><br><input type="radio" name="III19rad" value="4" id="III19rad4">
						</label>

												<label for="III19rad5">
							<b>5</b><br><input type="radio" name="III19rad" value="5" id="III19rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="III19com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>IV.</b> Contribuir al desarrollo de valores en los/as deportistas, con implicación de las familias</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>20.</b> Prevenir la violencia en la práctica deportiva y en la sociedad.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV20rad1">
							<b>1</b><br><input type="radio" name="IV20rad" value="1" id="IV20rad1" required>
						</label>

												<label for="IV20rad2">
							<b>2</b><br><input type="radio" name="IV20rad" value="2" id="IV20rad2">
						</label>

												<label for="IV20rad3">
							<b>3</b><br><input type="radio" name="IV20rad" value="3" id="IV20rad3">
						</label>

												<label for="IV20rad4">
							<b>4</b><br><input type="radio" name="IV20rad" value="4" id="IV20rad4">
						</label>

												<label for="IV20rad5">
							<b>5</b><br><input type="radio" name="IV20rad" value="5" id="IV20rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV20com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>21.</b> Ayudar a luchar contra los prejuicios y las discriminaciones sexuales, étnicas y sociales.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV21rad1">
							<b>1</b><br><input type="radio" name="IV21rad" value="1" id="IV21rad1" required>
						</label>

												<label for="IV21rad2">
							<b>2</b><br><input type="radio" name="IV21rad" value="2" id="IV21rad2">
						</label>

												<label for="IV21rad3">
							<b>3</b><br><input type="radio" name="IV21rad" value="3" id="IV21rad3">
						</label>

												<label for="IV21rad4">
							<b>4</b><br><input type="radio" name="IV21rad" value="4" id="IV21rad4">
						</label>

												<label for="IV21rad5">
							<b>5</b><br><input type="radio" name="IV21rad" value="5" id="IV21rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV21com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>22.</b> Crear y aplicar reglas referentes a la disciplina.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV22rad1">
							<b>1</b><br><input type="radio" name="IV22rad" value="1" id="IV22rad1" required>
						</label>

												<label for="IV22rad2">
							<b>2</b><br><input type="radio" name="IV22rad" value="2" id="IV22rad2">
						</label>

												<label for="IV22rad3">
							<b>3</b><br><input type="radio" name="IV22rad" value="3" id="IV22rad3">
						</label>

												<label for="IV22rad4">
							<b>4</b><br><input type="radio" name="IV22rad" value="4" id="IV22rad4">
						</label>

												<label for="IV22rad5">
							<b>5</b><br><input type="radio" name="IV22rad" value="5" id="IV22rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV22com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>23.</b> Desarrollar valores de convivencia en grupo y valores de desarrollo personal.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV23rad1">
							<b>1</b><br><input type="radio" name="IV23rad" value="1" id="IV23rad1" required>
						</label>

												<label for="IV23rad2">
							<b>2</b><br><input type="radio" name="IV23rad" value="2" id="IV23rad2">
						</label>

												<label for="IV23rad3">
							<b>3</b><br><input type="radio" name="IV23rad" value="3" id="IV23rad3">
						</label>

												<label for="IV23rad4">
							<b>4</b><br><input type="radio" name="IV23rad" value="4" id="IV23rad4">
						</label>

												<label for="IV23rad5">
							<b>5</b><br><input type="radio" name="IV23rad" value="5" id="IV23rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV23com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>24.</b> Programar y conducir sesiones informativas a las familias.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV24rad1">
							<b>1</b><br><input type="radio" name="IV24rad" value="1" id="IV24rad1" required>
						</label>

												<label for="IV24rad2">
							<b>2</b><br><input type="radio" name="IV24rad" value="2" id="IV24rad2">
						</label>

												<label for="IV24rad3">
							<b>3</b><br><input type="radio" name="IV24rad" value="3" id="IV24rad3">
						</label>

												<label for="IV24rad4">
							<b>4</b><br><input type="radio" name="IV24rad" value="4" id="IV24rad4">
						</label>

												<label for="IV24rad5">
							<b>5</b><br><input type="radio" name="IV24rad" value="5" id="IV24rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV24com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>25.</b> Implicar las familias en la construcción y colaboración de la estructura deportiva del club.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV25rad1">
							<b>1</b><br><input type="radio" name="IV25rad" value="1" id="IV25rad1" required>
						</label>

												<label for="IV25rad2">
							<b>2</b><br><input type="radio" name="IV25rad" value="2" id="IV25rad2">
						</label>

												<label for="IV25rad3">
							<b>3</b><br><input type="radio" name="IV25rad" value="3" id="IV25rad3">
						</label>

												<label for="IV25rad4">
							<b>4</b><br><input type="radio" name="IV25rad" value="4" id="IV25rad4">
						</label>

												<label for="IV25rad5">
							<b>5</b><br><input type="radio" name="IV25rad" value="5" id="IV25rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV25com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>26.</b> Mantener las familias informadas respeto a la progresión y el desarrollo de su hijo/a.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="IV26rad1">
							<b>1</b><br><input type="radio" name="IV26rad" value="1" id="IV26rad1" required>
						</label>

												<label for="IV26rad2">
							<b>2</b><br><input type="radio" name="IV26rad" value="2" id="IV26rad2">
						</label>

												<label for="IV26rad3">
							<b>3</b><br><input type="radio" name="IV26rad" value="3" id="IV26rad3">
						</label>

												<label for="IV26rad4">
							<b>4</b><br><input type="radio" name="IV26rad" value="4" id="IV26rad4">
						</label>

												<label for="IV26rad5">
							<b>5</b><br><input type="radio" name="IV26rad" value="5" id="IV26rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="IV26com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>V.</b> Liderar, comunicar y utilizar empatía</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>27.</b> Emplear habilidades comunicativas.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V27rad1">
							<b>1</b><br><input type="radio" name="V27rad" value="1" id="V27rad1" required>
						</label>

												<label for="V27rad2">
							<b>2</b><br><input type="radio" name="V27rad" value="2" id="V27rad2">
						</label>

												<label for="V27rad3">
							<b>3</b><br><input type="radio" name="V27rad" value="3" id="V27rad3">
						</label>

												<label for="V27rad4">
							<b>4</b><br><input type="radio" name="V27rad" value="4" id="V27rad4">
						</label>

												<label for="V27rad5">
							<b>5</b><br><input type="radio" name="V27rad" value="5" id="V27rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V27com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>28.</b> Demostrar disciplina y control emocional en entrenos y partidos.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V28rad1">
							<b>1</b><br><input type="radio" name="V28rad" value="1" id="V28rad1" required>
						</label>

												<label for="V28rad2">
							<b>2</b><br><input type="radio" name="V28rad" value="2" id="V28rad2">
						</label>

												<label for="V28rad3">
							<b>3</b><br><input type="radio" name="V28rad" value="3" id="V28rad3">
						</label>

												<label for="V28rad4">
							<b>4</b><br><input type="radio" name="V28rad" value="4" id="V28rad4">
						</label>

												<label for="V28rad5">
							<b>5</b><br><input type="radio" name="V28rad" value="5" id="V28rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V28com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>29.</b> Demostrar conducta ejemplar personal y profesionalmente.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V29rad1">
							<b>1</b><br><input type="radio" name="V29rad" value="1" id="V29rad1" required>
						</label>

												<label for="V29rad2">
							<b>2</b><br><input type="radio" name="V29rad" value="2" id="V29rad2">
						</label>

												<label for="V29rad3">
							<b>3</b><br><input type="radio" name="V29rad" value="3" id="V29rad3">
						</label>

												<label for="V29rad4">
							<b>4</b><br><input type="radio" name="V29rad" value="4" id="V29rad4">
						</label>

												<label for="V29rad5">
							<b>5</b><br><input type="radio" name="V29rad" value="5" id="V29rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V29com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>30.</b> Crear un entorno de práctica agradable y adecuado.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V30rad1">
							<b>1</b><br><input type="radio" name="V30rad" value="1" id="V30rad1" required>
						</label>

												<label for="V30rad2">
							<b>2</b><br><input type="radio" name="V30rad" value="2" id="V30rad2">
						</label>

												<label for="V30rad3">
							<b>3</b><br><input type="radio" name="V30rad" value="3" id="V30rad3">
						</label>

												<label for="V30rad4">
							<b>4</b><br><input type="radio" name="V30rad" value="4" id="V30rad4">
						</label>

												<label for="V30rad5">
							<b>5</b><br><input type="radio" name="V30rad" value="5" id="V30rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V30com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>31.</b> Fomentar el gusto y el interés para la práctica de deportes y actividades físicas a lo largo de la vida.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V31rad1">
							<b>1</b><br><input type="radio" name="V31rad" value="1" id="V31rad1" required>
						</label>

												<label for="V31rad2">
							<b>2</b><br><input type="radio" name="V31rad" value="2" id="V31rad2">
						</label>

												<label for="V31rad3">
							<b>3</b><br><input type="radio" name="V31rad" value="3" id="V31rad3">
						</label>

												<label for="V31rad4">
							<b>4</b><br><input type="radio" name="V31rad" value="4" id="V31rad4">
						</label>

												<label for="V31rad5">
							<b>5</b><br><input type="radio" name="V31rad" value="5" id="V31rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V31com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>32.</b> Aplicar técnicas de motivación y generar el compromiso con la práctica de la modalidad.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="V32rad1">
								<b>1</b><br><input type="radio" name="V32rad" value="1" id="V32rad1" required>
							</label>

												<label for="V32rad2">
								<b>2</b><br><input type="radio" name="V32rad" value="2" id="V32rad2">
							</label>

												<label for="V32rad3">
								<b>3</b><br><input type="radio" name="V32rad" value="3" id="V32rad3">
							</label>

												<label for="V32rad4">
								<b>4</b><br><input type="radio" name="V32rad" value="4" id="V32rad4">
							</label>

												<label for="V32rad5">
								<b>5</b><br><input type="radio" name="V32rad" value="5" id="V32rad5">
							</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="V32com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>VI.</b> Participar de la gestión del club, de la promoción de la modalidad y captar nuevos adeptos</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>33.</b> Ayudar a elaborar y gestionar el proyecto institucional.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI33rad1">
							<b>1</b><br><input type="radio" name="VI33rad" value="1" id="VI33rad1" required>
						</label>

												<label for="VI33rad2">
							<b>2</b><br><input type="radio" name="VI33rad" value="2" id="VI33rad2">
						</label>

												<label for="VI33rad3">
							<b>3</b><br><input type="radio" name="VI33rad" value="3" id="VI33rad3">
						</label>

												<label for="VI33rad4">
							<b>4</b><br><input type="radio" name="VI33rad" value="4" id="VI33rad4">
						</label>

												<label for="VI33rad5">
							<b>5</b><br><input type="radio" name="VI33rad" value="5" id="VI33rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI33com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>34.</b> Ayudar a administrar los recursos del club (económicos, materiales, humanos).
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI34rad1">
							<b>1</b><br><input type="radio" name="VI34rad" value="1" id="VI34rad1" required>
						</label>

												<label for="VI34rad2">
							<b>2</b><br><input type="radio" name="VI34rad" value="2" id="VI34rad2">
						</label>

												<label for="VI34rad3">
							<b>3</b><br><input type="radio" name="VI34rad" value="3" id="VI34rad3">
						</label>

												<label for="VI34rad4">
							<b>4</b><br><input type="radio" name="VI34rad" value="4" id="VI34rad4">
						</label>

												<label for="VI34rad5">
							<b>5</b><br><input type="radio" name="VI34rad" value="5" id="VI34rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI34com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>35.</b> Organizar y gestionar los viajes y salidas para los partidos.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI35rad1">
							<b>1</b><br><input type="radio" name="VI35rad" value="1" id="VI35rad1" required>
						</label>

												<label for="VI35rad2">
							<b>2</b><br><input type="radio" name="VI35rad" value="2" id="VI35rad2">
						</label>

												<label for="VI35rad3">
							<b>3</b><br><input type="radio" name="VI35rad" value="3" id="VI35rad3">
						</label>

												<label for="VI35rad4">
							<b>4</b><br><input type="radio" name="VI35rad" value="4" id="VI35rad4">
						</label>

												<label for="VI35rad5">
							<b>5</b><br><input type="radio" name="VI35rad" value="5" id="VI35rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI35com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>36.</b> Participar en la selección de los de materiales deportivos que el club adquiere.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI36rad1">
							<b>1</b><br><input type="radio" name="VI36rad" value="1" id="VI36rad1" required>
						</label>

												<label for="VI36rad2">
							<b>2</b><br><input type="radio" name="VI36rad" value="2" id="VI36rad2">
						</label>

												<label for="VI36rad3">
							<b>3</b><br><input type="radio" name="VI36rad" value="3" id="VI36rad3">
						</label>

												<label for="VI36rad4">
							<b>4</b><br><input type="radio" name="VI36rad" value="4" id="VI36rad4">
						</label>

												<label for="VI36rad5">
							<b>5</b><br><input type="radio" name="VI36rad" value="5" id="VI36rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI36com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>


									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>37.</b> Participar en la promoción de la modalidad a nivel institucional (club) y sociedad, captando nuevos/as adeptos/as.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI37rad1">
							<b>1</b><br><input type="radio" name="VI37rad" value="1" id="VI37rad1" required>
						</label>

												<label for="VI37rad2">
							<b>2</b><br><input type="radio" name="VI37rad" value="2" id="VI37rad2">
						</label>

												<label for="VI37rad3">
							<b>3</b><br><input type="radio" name="VI37rad" value="3" id="VI37rad3">
						</label>

												<label for="VI37rad4">
							<b>4</b><br><input type="radio" name="VI37rad" value="4" id="VI37rad4">
						</label>

												<label for="VI37rad5">
							<b>5</b><br><input type="radio" name="VI37rad" value="5" id="VI37rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI37com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>38.</b> Aplicar protocolos para la selección y detección de talentos deportivos.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VI38rad1">
							<b>1</b><br><input type="radio" name="VI38rad" value="1" id="VI38rad1" required>
						</label>

												<label for="VI38rad2">
							<b>2</b><br><input type="radio" name="VI38rad" value="2" id="VI38rad2">
						</label>

												<label for="VI38rad3">
							<b>3</b><br><input type="radio" name="VI38rad" value="3" id="VI38rad3">
						</label>

												<label for="VI38rad4">
							<b>4</b><br><input type="radio" name="VI38rad" value="4" id="VI38rad4">
						</label>

												<label for="VI38rad5">
							<b>5</b><br><input type="radio" name="VI38rad" value="5" id="VI38rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VI38com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>

								<hr class="showMobile">

								<div class="validaAmb">
									<div class="tituloAmb cellAmb">
										<h3><b>VII.</b> Formarse continuamente</h3>
									</div>

									<div class="legClaridadAmb cellAmb">
										<h4>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</h4>
									</div>

									<div class="legComentarioAmb cellAmb">
										<h4>
											Comentarios <b>(opcional)</b>
										</h4>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>39.</b> Reflexionar continuamente sobre su labor profesional.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII39rad1">
							<b>1</b><br><input type="radio" name="VII39rad" value="1" id="VII39rad1" required>
						</label>

												<label for="VII39rad2">
							<b>2</b><br><input type="radio" name="VII39rad" value="2" id="VII39rad2">
						</label>

												<label for="VII39rad3">
							<b>3</b><br><input type="radio" name="VII39rad" value="3" id="VII39rad3">
						</label>

												<label for="VII39rad4">
							<b>4</b><br><input type="radio" name="VII39rad" value="4" id="VII39rad4">
						</label>

												<label for="VII39rad5">
							<b>5</b><br><input type="radio" name="VII39rad" value="5" id="VII39rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII39com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>40.</b> Poner en práctica un programa personal de formación continua.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII40rad1">
							<b>1</b><br><input type="radio" name="VII40rad" value="1" id="VII40rad1" required>
						</label>

												<label for="VII40rad2">
							<b>2</b><br><input type="radio" name="VII40rad" value="2" id="VII40rad2">
						</label>

												<label for="VII40rad3">
							<b>3</b><br><input type="radio" name="VII40rad" value="3" id="VII40rad3">
						</label>

												<label for="VII40rad4">
							<b>4</b><br><input type="radio" name="VII40rad" value="4" id="VII40rad4">
						</label>

												<label for="VII40rad5">
							<b>5</b><br><input type="radio" name="VII40rad" value="5" id="VII40rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII40com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>41.</b> Investigar sobre aspectos relevantes de la modalidad, del entrenamiento y partidos
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII41rad1">
							<b>1</b><br><input type="radio" name="VII41rad" value="1" id="VII41rad1" required>
						</label>

												<label for="VII41rad2">
							<b>2</b><br><input type="radio" name="VII41rad" value="2" id="VII41rad2">
						</label>

												<label for="VII41rad3">
							<b>3</b><br><input type="radio" name="VII41rad" value="3" id="VII41rad3">
						</label>

												<label for="VII41rad4">
							<b>4</b><br><input type="radio" name="VII41rad" value="4" id="VII41rad4">
						</label>

												<label for="VII41rad5">
							<b>5</b><br><input type="radio" name="VII41rad" value="5" id="VII41rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII41com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>42.</b> Potenciar continuamente su capacidad profesional.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII42rad1">
							<b>1</b><br><input type="radio" name="VII42rad" value="1" id="VII42rad1" required>
						</label>

												<label for="VII42rad2">
							<b>2</b><br><input type="radio" name="VII42rad" value="2" id="VII42rad2">
						</label>

												<label for="VII42rad3">
							<b>3</b><br><input type="radio" name="VII42rad" value="3" id="VII42rad3">
						</label>

												<label for="VII42rad4">
							<b>4</b><br><input type="radio" name="VII42rad" value="4" id="VII42rad4">
						</label>

												<label for="VII42rad5">
							<b>5</b><br><input type="radio" name="VII42rad" value="5" id="VII42rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII42com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>43.</b> Actuar colaborativamente con otros/as entrenadores/as intercambiando conocimientos de la disciplina.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII43rad1">
							<b>1</b><br><input type="radio" name="VII43rad" value="1" id="VII43rad1" required>
						</label>

												<label for="VII43rad2">
							<b>2</b><br><input type="radio" name="VII43rad" value="2" id="VII43rad2">
						</label>

												<label for="VII43rad3">
							<b>3</b><br><input type="radio" name="VII43rad" value="3" id="VII43rad3">
						</label>

												<label for="VII43rad4">
							<b>4</b><br><input type="radio" name="VII43rad" value="4" id="VII43rad4">
						</label>

												<label for="VII43rad5">
							<b>5</b><br><input type="radio" name="VII43rad" value="5" id="VII43rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII43com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>

									<div class="rowValAmb">

										<div class="competAmb cellAmb">
											<b>44.</b> Indagar sobre la forma de introducir nuevas tecnologías y metodologías en los entrenamientos.
										</div>
										<div class="optsAmb cellAmb">
											<h4 class="showMobile"> <label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label> </h4>
											<div class="opts">
												<label for="VII44rad1">
							<b>1</b><br><input type="radio" name="VII44rad" value="1" id="VII44rad1" required>
						</label>

												<label for="VII44rad2">
							<b>2</b><br><input type="radio" name="VII44rad" value="2" id="VII44rad2">
						</label>

												<label for="VII44rad3">
							<b>3</b><br><input type="radio" name="VII44rad" value="3" id="VII44rad3">
						</label>

												<label for="VII44rad4">
							<b>4</b><br><input type="radio" name="VII44rad" value="4" id="VII44rad4">
						</label>

												<label for="VII44rad5">
							<b>5</b><br><input type="radio" name="VII44rad" value="5" id="VII44rad5">
						</label>
											</div>
										</div>

										<div class="comAmb cellAmb">
											<h4 class="showMobile"> <label for="">Comentarios <b>(opcional)</b></label> </h4>
											<textarea name="VII44com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</div>
									</div>
								</div>
							</center>

							<div class="question redbold">
								<p><b>45. </b>¿Hay alguna otra competencia importante para ser un buen entrenador de voleibol en edad escolar que no ha encontrado en este cuestionario? ¿Cuál?</p>
								<div class="aviso_breve"><i>(En el cuestionario final, será de respuesta abierta)</i></div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="c45rad1">
										<b>1</b><br><input type="radio" name="c45rad" value="1" id="c45rad1" required>
									</label>

												<label for="c45rad2">
										<b>2</b><br><input type="radio" name="c45rad" value="2" id="c45rad2">
									</label>

												<label for="c45rad3">
										<b>3</b><br><input type="radio" name="c45rad" value="3" id="c45rad3">
									</label>

												<label for="c45rad4">
										<b>4</b><br><input type="radio" name="c45rad" value="4" id="c45rad4">
									</label>

												<label for="c45rad5">
										<b>5</b><br><input type="radio" name="c45rad" value="5" id="c45rad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="c45com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>


							<h3 class="titApartado"><b>D.</b> Opinión sobre la formación de los entrenadores que actúan en edad escolar</h3>
							<hr class="apartado">


							<div class="question redbold">
								<p><b>46.</b> En su opinión, ¿deberían existir cursos de actualización a los que fuera obligatorio asistir periódicamente?</p>

								<div class="aviso_breve"><i>(En el cuestionario final, será de respuesta tipo Sí/No)</i></div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="d46rad1">
										<b>1</b><br><input type="radio" name="d46rad" value="1" id="d46rad1" required>
						</label>

												<label for="d46rad2">
										<b>2</b><br><input type="radio" name="d46rad" value="2" id="d46rad2">
									</label>

												<label for="d46rad3">
										<b>3</b><br><input type="radio" name="d46rad" value="3" id="d46rad3">
									</label>

												<label for="d46rad4">
										<b>4</b><br><input type="radio" name="d46rad" value="4" id="d46rad4">
									</label>

												<label for="d46rad5">
										<b>5</b><br><input type="radio" name="d46rad" value="5" id="d46rad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="d46com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>47.</b> ¿Qué modalidad de curso de formación más le atrae participar?</p>

								<div class="optsUnlim third_grid">
									<label for="" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible.')"> Presencial
						</label>

									<label for="" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible.')"> Semipresencial
						</label>

									<label for="" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible.')"> A distancia
						</label>
								</div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="d47rad1">
										<b>1</b><br><input type="radio" name="d47rad" value="1" id="d47rad1" required>
						</label>

												<label for="d47rad2">
										<b>2</b><br><input type="radio" name="d47rad" value="2" id="d47rad2">
									</label>

												<label for="d47rad3">
										<b>3</b><br><input type="radio" name="d47rad" value="3" id="d47rad3">
									</label>

												<label for="d47rad4">
										<b>4</b><br><input type="radio" name="d47rad" value="4" id="d47rad4">
									</label>

												<label for="d47rad5">
										<b>5</b><br><input type="radio" name="d47rad" value="5" id="d47rad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="d47com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>48.</b> Opcionalmente, deje algún comentario relevante sobre cómo crees debería ser la formación del entrenador o entrenadora de voleibol que actúa con jugadores/as en edad escolar</p>
								<div class="aviso_breve"><i>(En el cuestionario final, será de respuesta abierta)</i></div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="d48rad1">
										<b>1</b><br><input type="radio" name="d48rad" value="1" id="d48rad1" required>
						</label>

												<label for="d48rad2">
										<b>2</b><br><input type="radio" name="d48rad" value="2" id="d48rad2">
									</label>

												<label for="d48rad3">
										<b>3</b><br><input type="radio" name="d48rad" value="3" id="d48rad3">
									</label>

												<label for="d48rad4">
										<b>4</b><br><input type="radio" name="d48rad" value="4" id="d48rad4">
									</label>

												<label for="d48rad5">
										<b>5</b><br><input type="radio" name="d48rad" value="5" id="d48rad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="d48com" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>



							<br>
							<br>

							<h3 class="titApartado"><b>E.</b> Datos sociodemográficos</h3>
							<hr class="apartado">


							<div class="question redbold">
								<p><b>a.</b> Comunidad Autónoma que actúa como entrenador/a:</p>

								<div class="aviso_breve"><i>(En el cuestionario final, habrá un despegable con las opciones de respuesta)</i></div>

							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="earad1">
										<b>1</b><br><input type="radio" name="earad" value="1" id="earad1" required>
						</label>

												<label for="earad2">
										<b>2</b><br><input type="radio" name="earad" value="2" id="earad2">
									</label>

												<label for="earad3">
										<b>3</b><br><input type="radio" name="earad" value="3" id="earad3">
									</label>

												<label for="earad4">
										<b>4</b><br><input type="radio" name="earad" value="4" id="earad4">
									</label>

												<label for="earad5">
										<b>5</b><br><input type="radio" name="earad" value="5" id="earad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="eacom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>b. </b> Tiempo de experiencia con el voleibol. Tenga en cuenta todas sus experiencias con la modalidad: jugador/a, directivo/a, entrenador/a, árbitro/a, etc. (años y meses)</p>


							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="ebrad1">
										<b>1</b><br><input type="radio" name="ebrad" value="1" id="ebrad1" required>
						</label>

												<label for="ebrad2">
										<b>2</b><br><input type="radio" name="ebrad" value="2" id="ebrad2">
									</label>

												<label for="ebrad3">
										<b>3</b><br><input type="radio" name="ebrad" value="3" id="ebrad3">
									</label>

												<label for="ebrad4">
										<b>4</b><br><input type="radio" name="ebrad" value="4" id="ebrad4">
									</label>

												<label for="ebrad5">
										<b>5</b><br><input type="radio" name="ebrad" value="5" id="ebrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="ebcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>c.</b> Título de entrenador/a que posee actualmente:</p>

								<div class="fifth_grid optsUnlim" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible')">
									<label for="">
								Minivolley
							</label>

									<label for="">
								Nivel 1
							</label>

									<label for="">
								Nivel 2
							</label>

									<label for="">
								Nivel 3
							</label>

									<label for="">
								Internacional (1, 2 ó 3)
							</label>
								</div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="ecrad1">
										<b>1</b><br><input type="radio" name="ecrad" value="1" id="ecrad1" required>
						</label>

												<label for="ecrad2">
										<b>2</b><br><input type="radio" name="ecrad" value="2" id="ecrad2">
									</label>

												<label for="ecrad3">
										<b>3</b><br><input type="radio" name="ecrad" value="3" id="ecrad3">
									</label>

												<label for="ecrad4">
										<b>4</b><br><input type="radio" name="ecrad" value="4" id="ecrad4">
									</label>

												<label for="ecrad5">
										<b>5</b><br><input type="radio" name="ecrad" value="5" id="ecrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="eccom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>d.</b> Formación Académica:</p>

								<div class="fAcademica optsUnlim" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible')">
									<label for="" class="eso_bachillerato cellFAcademica">
								ESO/BACHILLERATO
							</label>

									<label for="" class="fp cellFAcademica">
								FP o similar relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="fp_no cellFAcademica">
								FP o similar NO relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="dgl cellFAcademica">
								Diplomatura, Grado o Licenciatura relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="dgl_no cellFAcademica">
								Diplomatura, Grado o Licenciatura NO relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="master cellFAcademica">
								Máster relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="master_no cellFAcademica">
								Máster NO relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="doc cellFAcademica">
								Doctorado relacionado a la Actividad Física o el Deporte
							</label>

									<label for="" class="doc_no cellFAcademica">
								Doctorado NO relacionado a la Actividad Física o el Deporte
							</label>
								</div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="edrad1">
										<b>1</b><br><input type="radio" name="edrad" value="1" id="edrad1" required>
						</label>

												<label for="edrad2">
										<b>2</b><br><input type="radio" name="edrad" value="2" id="edrad2">
									</label>

												<label for="edrad3">
										<b>3</b><br><input type="radio" name="edrad" value="3" id="edrad3">
									</label>

												<label for="edrad4">
										<b>4</b><br><input type="radio" name="edrad" value="4" id="edrad4">
									</label>

												<label for="edrad5">
										<b>5</b><br><input type="radio" name="edrad" value="5" id="edrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="edcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>e.</b> Dedicación actual a la modalidad. Tenga en cuenta todas sus actividades: jugador/a, directivo/a, entrenador/a, árbitro/a, etc.</p>

								<div class="half_grid optsUnlim" onclick="alert('Esta pregunta es sólo para el cuestionario final, ahora necesitamos que nos diga si lo ve comprensible')">
									<label for="">
								<b style="color:#0076BC">Integral</b> (todas mis actividades profesionales están relacionadas al voleibol)
							</label>

									<label for="">
								<b style="color:#0076BC">Parcial</b> (tengo otra/s actividad/es profesional/es no relacionada/s al voleibol)
							</label>
								</div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="eerad1">
										<b>1</b><br><input type="radio" name="eerad" value="1" id="eerad1" required>
						</label>

												<label for="eerad2">
										<b>2</b><br><input type="radio" name="eerad" value="2" id="eerad2">
									</label>

												<label for="eerad3">
										<b>3</b><br><input type="radio" name="eerad" value="3" id="eerad3">
									</label>

												<label for="eerad4">
										<b>4</b><br><input type="radio" name="eerad" value="4" id="eerad4">
									</label>

												<label for="eerad5">
										<b>5</b><br><input type="radio" name="eerad" value="5" id="eerad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="eecom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>f.</b> Fecha de nacimiento</p>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="efrad1">
										<b>1</b><br><input type="radio" name="efrad" value="1" id="efrad1" required>
						</label>

												<label for="efrad2">
										<b>2</b><br><input type="radio" name="efrad" value="2" id="efrad2">
									</label>

												<label for="efrad3">
										<b>3</b><br><input type="radio" name="efrad" value="3" id="efrad3">
									</label>

												<label for="efrad4">
										<b>4</b><br><input type="radio" name="efrad" value="4" id="efrad4">
									</label>

												<label for="efrad5">
										<b>5</b><br><input type="radio" name="efrad" value="5" id="efrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="efcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>g.</b> Nacionalidad/es</p>

								<div class="aviso_breve"><i>(En el cuestionario final, será de respuesta abierta)</i></div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="egrad1">
										<b>1</b><br><input type="radio" name="egrad" value="1" id="egrad1" required>
						</label>

												<label for="egrad2">
										<b>2</b><br><input type="radio" name="egrad" value="2" id="egrad2">
									</label>

												<label for="egrad3">
										<b>3</b><br><input type="radio" name="egrad" value="3" id="egrad3">
									</label>

												<label for="egrad4">
										<b>4</b><br><input type="radio" name="egrad" value="4" id="egrad4">
									</label>

												<label for="egrad5">
										<b>5</b><br><input type="radio" name="egrad" value="5" id="egrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="egcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>h.</b> Sexo</p>

								<div class="aviso_breve"><i>(Hombre/Mujer)</i></div>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="ehrad1">
										<b>1</b><br><input type="radio" name="ehrad" value="1" id="ehrad1" required>
						</label>

												<label for="ehrad2">
										<b>2</b><br><input type="radio" name="ehrad" value="2" id="ehrad2">
									</label>

												<label for="ehrad3">
										<b>3</b><br><input type="radio" name="ehrad" value="3" id="ehrad3">
									</label>

												<label for="ehrad4">
										<b>4</b><br><input type="radio" name="ehrad" value="4" id="ehrad4">
									</label>

												<label for="ehrad5">
										<b>5</b><br><input type="radio" name="ehrad" value="5" id="ehrad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="ehcom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<div class="question redbold">
								<p><b>i.</b> Si quiere recibir el informe general de la investigación, por favor facilítenos su correo electrónico (opcional)</p>
							</div>
							<div class="valida">
								<table>
									<tr>
										<th>
											<label onclick="alert('1 = Muy confusa\n5 = Totalmente clara')">Claridad</label>
										</th>
									</tr>

									<tr>
										<td>
											<div class="opts">
												<label for="eirad1">
										<b>1</b><br><input type="radio" name="eirad" value="1" id="eirad1" required>
						</label>

												<label for="eirad2">
										<b>2</b><br><input type="radio" name="eirad" value="2" id="eirad2">
									</label>

												<label for="eirad3">
										<b>3</b><br><input type="radio" name="eirad" value="3" id="eirad3">
									</label>

												<label for="eirad4">
										<b>4</b><br><input type="radio" name="eirad" value="4" id="eirad4">
									</label>

												<label for="eirad5">
										<b>5</b><br><input type="radio" name="eirad" value="5" id="eirad5">
									</label>
											</div>
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<th>
											Comentarios <b>(opcional)</b>
										</th>
									</tr>

									<tr>
										<td>
											<textarea name="eicom" id="comentario" maxlength="280" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
										</td>
									</tr>
								</table>
							</div>

							<h3 class="titApartado"><b>F.</b> Datos personales del/la evaluador/a</h3>
							<hr class="apartado">

							<center>
								<div class="comApF">
									<table>
										<tr>
											<th>
												Comentarios generales sobre el cuestionario <b>(opcional)</b>
											</th>
										</tr>

										<tr>
											<td>
												<textarea name="fcom" id="comentario" maxlength="600" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
											</td>
										</tr>
									</table>
								</div>
							</center>

							<div class="question">
								<p>Nombre del evaluador:</p>

								<input type="text" name="name" class="short" maxlength="70" placeholder="Introduzca su nombre..." required>
							</div>

							<div class="question">
								<p>Fecha de nacimiento:</p>

								<input type="text" name="data_nasc" class="short" id="date" placeholder="dd/mm/aaaa" required>
							</div>

							<!-- <input type="submit" class="enviar" value="Enviar" name="subValidacion"> -->

						</form>

						<?php
							
						}
						else{
							senha(true);
						}
					}
					else{
						senha(false);
					}
					
					function senha($errada){
						
						?>
							<form action="" method="post" class="query">
								<center>
									<div class="question password redbold">
										<p>Por favor, introduzca la contraseña:</p>

										<input type="password" class="short" name="senha" maxlength="20">



										<?php
						
						if($errada){
							
							?>
										<br>
										<small>Contraseña incorrecta.</small>

										<?php
							
						}
						
						?>
										<br>
										<input type="submit" class="enviar" value="Entrar">
									</div>
								</center>
							</form>

							<?php
					}
						
					?>


				</div>
				<div id="rodape"></div>
			</center>
		</div>


	</body>

</html>
