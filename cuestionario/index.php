<!DOCTYPE html>
<?php
	// include "../config/connect.php";
	
	include "../util/util.php";

	session_start();
	
	$page = 1;	

	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}

	if(isset($_POST['senha']))
	{
		$senha = $_POST['senha'];
	}

	if(isset($_SESSION['senha']))
	{
		$senha = $_SESSION['senha'];
	}
	else
	{
		echo "<script>page = 1</script>";
	}

	if(isset($_SESSION['inicio']))
	{
		$inicio = $_SESSION['inicio'];
	}
	else
	{
		$inicio = date('Y-m-d H:i:s');
	}
?>


	<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		// var page = 1;
	</script>
	<head>
		<meta charset="UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<link rel="stylesheet" type="text/css" href="../style.css?n=1">
		<link rel="stylesheet" type="text/css" href="../cuestionario.css?n=1">
		<title>Cuestionario - Competencias del Voleibol</title>
	</head>



	<body>
		<div id="conteudo">
			<div class="head" id="headjs"></div>
			<div class="top show">
				<div class="nav">
					<ul>
						<li><a href="../">Inicio</a></li>
						<!-- <li><a href="../piloto">Piloto</a></li> -->
						<li><a href="" id="active">Cuestionario</a></li>
						<li><a href="../info">Informaciones</a></li>
					</ul>
				</div>
			</div>

			<div class="dropdown">
				<div class="title">
					Cuestionario
				</div>
				<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
				<div id="" class="dropdown_content">
					<a href="../">Inicio</a>
					<!-- <a href="../piloto">Piloto</a> -->
					<a href="" id="active">Cuestionario</a>
					<a href="../info">Informaciones</a>
				</div>
			</div>

			<center>


				<div class="content">
					<div class="tesis">
						<h2 style="margin-bottom: 0;">Cuestionario</h2>
						<h3 style="margin-top: 0;" id="maintitle">Competencias profesionales de entrenadores de voleibol implicados en el deporte en edad escolar</h3>
					</div>

					<label for="" class="page_control"></label>

					<?php
						
					// if(isset($senha)){
					// 	$md5 = md5($senha);
						
					// 	if($md5 == "b683ee3a2b5d2d1f4511e93df9f48fee")
					// 	{
					// 		$_SESSION['senha'] = $senha;
							$_SESSION['inicio'] = $inicio;
							
							?>

						<form action="dbsave.php" method="post" class="query" id="cuestionario">
							
							<br>

							<div class="btnsDiv">
								<div class="pageDiv">
									<a onclick="pageChange(-1)" class="page_btn ant" id="ant">Anterior</a>
									<a onclick="pageChange(1)" class="page_btn prox" id="prox">Siguiente</a>
								</div>
							</div>

							<div id="apA" class="apartado">
								<p>
									Estimado entrenador, Estimada entrenadora,
									<br><br> 
									¡Gracias por el interés en participar del estudio!
									<br><br>
									Al final del cuestionario tiene la opción de recibir el informe final de la investigación y también de participar en el sorteo de una tarjeta regalo de una tienda de material deportivo en el valor de 100€.	
									

									<p>
										<b style='color: #BE1521'>¡Aviso!</b>
										<br>
										<b>La participación en el sorteo está encerrada, pero puede seguir contestando el cuestionario normalmente, sus datos serán registrados. ¡Muchas gracias!</b>
									</p>
								</p>

								<p><small><b style='color: #BE1521'>*</b>Resolución favorable de la Comisión de Bioética de la Universidad de Barcelona: IRB 00003099</small></p>

								<hr>

								<p>
									Este cuestionario consta de diversas competencias necesarias para el ejercicio de entrenador o entrenadora de voleibol <i>indoor</i> que actúan con deportistas en edad escolar. Esas competencias surgen de una investigación anterior y de la bibliografía consultada. Su participación será determinar el grado de importancia que usted atribuye a cada competencia descrita, así como a la percepción de su dominio sobre la misma.
								</p>

								<p>
									Al acabar de rellenar el cuestionario les mostraremos un gráfico resumiendo el dominio que posee de dichas competencias y la importancia que les ha atribuido
								</p>

								<p>
									Para ayudarles, facilitamos la definición del término <b>“competencia”</b> para ese estudio:
								</p>

								<center>
									<div class="destaque">
										<i>
											En un sentido amplio: <b>“realizar una actividad con eficiencia en un contexto dado”</b> (Gámez, 2005) y en un sentido más específico: tener un <b>conjunto de conocimientos, procedimientos y actitudes integrados para que el individuo sepa hacer y sepa estar en su contexto de trabajo</b> (Lévy-Leboyer, 2003).
										</i>
									</div>
								</center>

								<p>
									Quizás también le interesa aclarar el término <b>“deporte escolar”</b>.
								</p>

								<center>


									<div class="destaque">
										<i>
											Coincidimos con los autores Gómez y García (1993) que lo definen como: “Toda actividad físico-deportiva realizada por niños/as jóvenes en edad escolar, dentro o fuera del centro escolar, incluso la desarrollada en el ámbito de clubs o de otras entidades públicas o privadas, <b>considerando, por lo tanto, deporte escolar como sinónimo de deporte en edad escolar</b>”. Para este estudio, nos interesa estudiar las competencias de los entrenadores y entrenadoras que trabajan con <b>deportistas hasta los 18 años</b> (categoría juvenil). 
										</i>
									</div>
								</center>

								<p>
									Por favor tenga en cuenta que de aquí en adelante cuando se usan términos en la <b>versión masculina</b> (p.ej. ‘jugador’, ‘jugadores’, ‘entrenador’…) se han de entender como una forma que <b>incluye los dos géneros</b> y que se procede de este modo para <b>optimizar la lectura</b>.
								</p>

								<h3 class="titApartado"><b>A.</b> El Consentimiento Informado</h3>
								<hr class="apartado">

								<!-- <div class="aviso">
									<div style="display: flex; text-align: center;">
										<img alt="¡Atención!" class="imgInfo" src="../imgs/info.png">
									</div>

									<div>
										<b>Estimado/a evaluador/a:</b><br>El consentimiento a continuación es para el cuestionario final, ahora sólo necesitamos que nos diga si lo ve comprensible, indicando el grado de claridad de su redactado.
									</div>
								</div> -->

								<div id="apartadoA_presenta">
									<h3>CONSENTIMIENTO INFORMADO POR ESCRITO - PARTICIPANTES EN EL CUESTIONARIO DEL ESTUDIO INTITULADO:</h3>
									<h2 style="color:#c78009;margin-top:0">“Las competencias profesionales y las necesidades formativas del entrenador de voleibol implicado en el deporte en edad escolar”</h2>
									<div class="half_grid">
										<div>	
											<h4>Fecha:<br><span style="font-weight: normal">01/09/2019</span></h4>
										</div>
										<!-- <div style="">
											<h4>Firma del investigador:</h4>
											<div>
												<img src="../imgs/firma.png" alt="" style="height: 50px;">
											</div>
										</div> -->
										
										<div>
											<h4 style="margin-top:0;text-align:right">Investigador: <span style="font-weight: normal;">Martina Kieling Sebold Barros Rolim</span></h4>
										</div>
									</div>
								</div>

								<p>
									El objetivo de esta información es ayudarle a tomar la decisión de participar en nuestra investigación.
									<br><br>
									Inicialmente deberá contestar una encuesta respecto a su grado de concordancia sobre las competencias de los entrenadores y entrenadoras de voleibol implicados en el deporte en edad escolar y también sobre el grado del dominio de esa competencia además de algunos datos sociodemográficos
									<br><br>
									El tiempo estimado de dedicación será alrededor de 10 minutos.
									<br><br>
									La información que nos brinde será tratada de manera confidencial y anónima y solamente para ese proyecto y divulgaciones científicas relacionadas. En ningún caso sus respuestas serán presentadas acompañadas de ningún dato que le identifique. Su participación es totalmente voluntaria y puede darla por terminada en cualquier momento. Asimismo, puede plantear todas sus dudas respecto a la investigación antes, durante y después de su participación al mail: <b><a href="mailto:martinakielingsebold@ub.edu?Subject=Cuestionario">martinakielingsebold@ub.edu</a></b>
								</p>

								<p>
									<small>
									a) En conformidad con lo establecido en dicha regulación, la UNIVERSIDAD DE BARCELONA, (con CIF Q0818001J y domicilio en la Gran Vía de las Cortes Catalanas, 585 -08007 Barcelona) como responsable del tratamiento de los datos personales, le informa que puede contactar con el Delegado de Protección de Datos mediante escrito a la dirección postal (Travessera de les Corts, 131-159, Pabellón Rosa, 08028 - Barcelona), o mediante un mensaje de correo electrónico a protecciodedades@ub.edu. 
									<br>b) Usted tiene derecho a acceder a sus datos, solicitar la rectificación de los datos inexactos o, en su caso, solicitar la supresión, así como limitar el tratamiento, oponerse y retirar el consentimiento de su uso para determinados fines. Estos derechos los puede ejercer mediante escrito a la dirección postal o mediante un mensaje de correo electrónico a la dirección mencionada en el párrafo anterior. Asimismo, le informamos de su derecho a presentar una reclamación ante la Agencia Catalana de Protección de Datos en el caso de cualquier actuación de la Universidad de Barcelona que considere que vulnera sus derechos.
									</small>
								</p>

								<center>
									<div class="half_grid consente">
										<label for="acepta">
											<input type="radio" id="acepta" name="aconsentimiento" value="Si" ><b style="color: #26b11a;">Acepto</b> participar del estudio<br>
										</label>
										<label for="no_acepta">
											<input type="radio" id="no_acepta" name="aconsentimiento" value="No"><b>No acepto</b> participar del estudio<br>
										</label>
									</div>
								</center>

								<p style="text-align: center">
									<b>Fecha:</b> <?php echo date("d/m/Y", strtotime($inicio)); ?>
								</p>

								<p style="text-align: right">
									Le damos las gracias por anticipado por su tiempo y su compromiso con este proyecto<br>
									<i>Prime <a href="consentimento_informado.pdf" target="_blank" download>aquí</a> para descargar el documento</i>
								</p>
							</div>

							<div id="apB" class="apartado">
									<h3 class="titApartado"><b>B.</b> Datos iniciales</h3>
									<hr class="apartado">
									<div class="question">
										<p>
											Antes de iniciar, por favor, indique con qué NIVEL de equipo-jugadores tiene experiencia. Si actúa o ha actuado en diferentes niveles, indique el nivel en que tiene más tiempo de experiencia o más afinidad:
										</p>

										<input type="radio" name="bnivel" id="nivel1" value="1" >
										<label for="nivel1">
											<b>Entrenador de <u>equipos debutantes o principiantes</u>:</b> Jugadores que, independientemente de la edad, están en su primer o segundo año de experiencia en la modalidad.
										</label>
										
										<br><br>

										<input type="radio" name="bnivel" id="nivel2" value="2">
										<label for="nivel2">
											<b>Entrenador de <u>equipos iniciados</u>:</b> Jugadores que, independientemente la edad, ya tienen alguna experiencia y están perfeccionando y variando sus habilidades.
										</label>

										<br><br>

										<input type="radio" name="bnivel" id="nivel3" value="3">
										<label for="nivel3">
											<b>Entrenador de <u>equipos experimentados</u>:</b> Jugadores que, independientemente la edad, tienen bien dominado los fundamentos y técnicas básicos y están refinando sus habilidades con rigor y precisión
										</label>
									</div>
							</div>

							<div id="apC" class="apartado">
								<h3 class="titApartado"><b>C.</b> Evaluación de las competencias y dominio sobre esas competencias</h3>
								<hr class="apartado">

								<div class="p">
									Considerando su experiencia como entrenador o entrenadora de voleibol les pedimos que por favor indique del 1 al 5 cómo valora las competencias a continuación con relación a:
									<ul class="specialul" style="display:none">
										<li><b>a.</b> La importancia que da usted a la labor del entrenador de voleibol en edad escolar (hasta la categoría juvenil)
										<br>
										</li>
										<li><b>b.</b> La percepción sobre su dominio de esa competencia</li>
									</ul>
								</div>

								<div class="half_grid apCfull">
									<h4 class="">
										<span class="legAmb legenda">
											<b>a)</b> 
											<!-- La importancia que da usted para la labor del entrenador de voleibol en edad escolar (hasta la categoría juvenil), siendo: -->

											Importancia atribuida a la competencia
										</span>
										<p class="legAmbOpts">
											1: Sin importancia
											<br>2: De poca importancia
											<br>3: Importancia moderada
											<br>4: Importante
											<br>5: Muy importante
										</p>
									</h4>

									<h4>
										<span class="legAmb legenda">
											<b>b)</b> 
											<!-- La percepción sobre su dominio de esa competencia, siendo: -->

											Su dominio sobre la competencia
										</span>
										<p class="legAmbOpts">
											1: Nada
											<br>2: Poco
											<br>3: Moderado
											<br>4: Suficiente
											<br>5: Experto
										</p>
									</h4>
								</div>

								<h3 style="margin-bottom: -10px; margin-top: 30px;">Validación de las competencias</h3>
								<hr>


								<!-- Competencias -->

								<?php 

								$ambito = 0;
								$quest = 0;

								//todos os ambitos
								$txtAmbito = array(
									"Planificación reflexiva", 
									"Gestión de las sesiones de entrenamientos y partidos",
									"Enseñanza de la modalidad",
									"Desarrollo de valores en los deportistas",
									"Liderazgo, comunicación y empatía",
									"Participación en la gestión del club y de la promoción de la modalidad",
									"Formación continuada"
									);

								//todas as competencias, ordenadas de acordo com os ambitos
								$ambCompet = array(
									array(
										"Planificar la temporada teniendo en cuenta las características de los jugadores, equipo, club y competición, estableciendo objetivos a corto, medio y largo plazo.", 
										"Hacer una periodización completa (física, técnica, táctica y psicológica o actitudinal) para la temporada.",
										"Planificar las cargas de trabajo de acuerdo con los objetivos del equipo y jugador.",
										"Programar actividades de aprendizaje de acuerdo con los contenidos y objetivos de la planificación.",
										"Evaluar y adaptar la programación de acuerdo con las necesidades y/o intereses de cada jugador durante la temporada.",
										"Gestionar la plantilla de jugadores antes, durante y después de los entrenos y partidos (convocatorias, promoción, etc.)."
									),
									array(
										"Controlar las variables que condicionan las sesiones de entreno o partidos (tiempo, materiales, conflictos, entre otras)",
										"Adaptar las cargas de trabajo de acuerdo con las necesidades cambiantes del equipo o jugador",
										"Adecuar las cargas de trabajo de los jugadores tras una lesión deportiva.",
										"Prestar primeros auxilios en situaciones de lesión durante entrenamiento y partidos.",
										"Gestionar la estrategia del propio equipo antes y durante los partidos en función de la observación/análisis de equipos contrarios.",
										"Evaluar los efectos de las actividades programadas, teniendo en cuenta los objetivos planificados.",
									),
									array(
										"Aplicar nociones básicas de la preparación física acordes con la edad y el sexo del practicante.",
										"Aplicar metodologías específicas para la enseñanza de los deportes colectivos.",
										"Enseñar el reglamento oficial de la modalidad.",
										"Utilizar Tecnologías de la Información y la Comunicación (TIC's) en la enseñanza del voleibol.",
										"Crear y aplicar modelos de juego (táctica individual y colectiva) de acuerdo con las características individuales y del equipo.",
										"Identificar errores y ofrecer <i>feedback</i>.",
									),
									array(
										"Potenciar las actividades y actitudes no violentas en la práctica deportiva y en la sociedad.",
										"Contribuir a la lucha contra los prejuicios y las discriminaciones sexuales, étnicas y sociales.",
										"Crear y aplicar reglas referentes a la disciplina.",
										"Potenciar valores de desarrollo personal y de convivencia en grupo.",
										"Implicar a las familias en la construcción y colaboración de la estructura deportiva del club.",
										"Mantener informadas a las familias respecto a la progresión y el desarrollo de su hijo/a.",
									),
									array(
										"Utilizar habilidades comunicativas apropiadas a la edad y a las situaciones de entrenamiento y competición.",
										"Mostrar disciplina y control emocional en entrenos y partidos.",
										"Aplicar nociones de psicología del deporte.",
										"Crear un entorno de práctica agradable y motivador.",
										"Generar el compromiso con la práctica de la modalidad.",
										"Incentivar la práctica del voleibol, de los demás deportes y actividades físicas a lo largo de la vida.",
									),
									array(
										"Ayudar a elaborar y gestionar el proyecto del club o entidad.",
										"Ayudar a administrar los recursos del club (económicos, materiales, humanos).",
										"Organizar y gestionar los viajes y salidas para los partidos.",
										"Participar en la selección de los materiales deportivos que el club adquiere.",
										"Participar en la promoción de la modalidad a nivel institucional (club) y social, con el objetivo de captar nuevos adeptos.",
										"Aplicar protocolos para la detección y selección de talentos deportivos.",
									),
									array(
										"Reflexionar continuamente sobre su labor profesional.",
										"Poner en práctica un programa personal de formación continuada.",
										"Actualizarse sobre aspectos relevantes de la modalidad.",
										"Explorar continuamente estrategias de innovación para los entrenamientos.",
										"Actuar colaborativamente con otros entrenadores intercambiando conocimientos de la disciplina.",
										"Indagar sobre la forma de introducir las nuevas tecnologías en los entrenamientos.",
									)
									);

								for($iamb = 0; $iamb < sizeof($txtAmbito); $iamb++)
								{
									?>
										<div class="validaAmb">
											<div class="tituloAmb cellAmb">
												<h2>
													<b><?php echo integerToRoman($iamb+1); ?>.</b> <?php echo $txtAmbito[$iamb]; ?>
												</h2>
											</div>

											<div class="legClaridadAmb cellAmb">
												<h4>
													<span class="legAmb">
														<b>a)</b> Importancia atribuida a la competencia
													</span>
												</h4>
											</div>

											<div class="legComentarioAmb cellAmb">
												<h4>
													<span class="legAmb">
														<b>b)</b> Su dominio sobre la competencia
													</span>
												</h4>
											</div>

											<?php

											for($acomp = 0; $acomp < sizeof($ambCompet[$iamb]); $acomp++)
											{
												?>
													<div class="rowValAmb">
														<?php $quest++; ?>
														<div class="competAmb cellAmb">
															<label for=""><b><?php echo $quest;?>.</b> <?php echo $ambCompet[$iamb][$acomp]; ?></label>
														</div>

														<!-- a) -->
														<div class="optsAmb cellAmb">
															<h4 class="showMobile">
																<?php $amb = 'a'; ?>
																<label><b class="mobileb">a)</b> Importancia</label>
															</h4>
															<div class="opts">
																<?php
																	for($opt = 1; $opt < 6; $opt++)
																	{
																		?>
																			<label for="<?php echo $quest.$amb.$opt; ?>">
																				<b><?php echo $opt; ?></b>
																				<input type="radio" name="c<?php echo $quest.$amb; ?>" id="<?php echo $quest.$amb.$opt; ?>" value="<?php echo $opt; ?>">
																			</label>
																		<?php
																	}
																?>
															</div>
														</div>

														<!-- b) -->
														<div class="optsAmb cellAmb" style="grid-area:comentario;">
															<h4 class="showMobile">
																<?php $amb = 'b'; ?>
																<label><b class="mobileb">b)</b> Su dominio</label>
															</h4>
															<div class="opts">
																<?php
																	for($opt = 1; $opt < 6; $opt++)
																	{
																		?>
																			<label for="<?php echo $quest.$amb.$opt; ?>">
																				<b><?php echo $opt; ?></b>
																				<input type="radio" name="c<?php echo $quest.$amb; ?>" id="<?php echo $quest.$amb.$opt; ?>" value="<?php echo $opt; ?>">
																			</label>
																		<?php
																	}
																?>
															</div>
														</div>
													</div>
												<?php
											}
											?>
										</div>
									<?php
								}
								?> 

								<div class="question redbold">
									<p><b><?php echo ++$quest; ?>.</b> ¿Hay alguna otra u otras competencias importantes para ser un buen entrenador de voleibol en edad escolar que no ha encontrado en este cuestionario? ¿Cuál?</p>
									<textarea name="c<?php echo $quest?>" cols="10" rows="5" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
								</div>

							</div>

							<div id="apD" class="apartado">
								<h3 class="titApartado"><b>D.</b> Opinión sobre la formación de los entrenadores que actúan en edad escolar</h3>
								<hr class="apartado">

								<?php
									$quest = 0;
								?>

								<div class="question redbold">
									<p><b>1.</b> En su opinión, para los entrenadores que actúan con deportistas en edad escolar, ¿deberían existir cursos de actualización a los que fuesen obligatorios asistir periódicamente?</p>
									<label for="d11">
										<input type="radio" name="d1" id="d11" value="Sí" > Sí
									</label>
									&nbsp;&nbsp;&nbsp;
									<label for="d12">
										<input type="radio" name="d1" id="d12" value="No"> No
									</label>
								</div>
								
								<div class="question redbold">
									<p><b>2.</b> Opcionalmente, deje algún comentario relevante sobre qué cree que echa a faltar en la <b>formación</b> del entrenador o entrenadora de voleibol que actúa con jugadores en edad escolar</p>
									<textarea name="d2" cols="10" rows="5" placeholder="Haga clic o toque aquí para escribir texto."></textarea>
								</div>
							</div>
							
							<div id="apE" class="apartado">
								<h3 class="titApartado"><b>E.</b> Datos sociodemográficos</h3>
								<hr class="apartado">

								<?php
									$q = 0;
								    $alpha = range('a', 'z');

									$comunidad = array(
										"-- Seleccione una opción --",
										"Andalucía",
										"Aragón",
										"Principado de Asturias",
										"Islas Baleares",
										"Canarias",
										"Cantabria",
										"Castilla-La Mancha",
										"Castilla y León",
										"Cataluña",
										"Comunidad Valenciana",
										"Extremadura",
										"Galicia",
										"La Rioja",
										"Comunidad de Madrid",
										"Región de Murcia",
										"Comunidad Foral de Navarra",
										"País Vasco",
										"Ceuta",
										"Melilla",
									);
								?>
								<div class="question redbold" id="ea">
									<p><b><?php echo $alpha[$q++] ?>.</b> Tiempo de experiencia con el voleibol. Tenga en cuenta todas sus experiencias con la modalidad: jugador, directivo, entrenador, árbitro, etc.</p>
									<input type="number" class="value" min="0" step="0.5" name="ea">&nbsp;años
								</div>

								<br>

								<div class="question redbold" id="eb">
									<p><b><?php echo $alpha[$q++] ?>.</b> Dedicación actual al voleibol</p>

									<div class="half_grid optsUnlim">
										<label for="ee1">
											<b style="color:#0076BC">Integral</b><br><small>(todas mis actividades profesionales están relacionadas al voleibol)</small><br>
											<input type="radio" name="eb" id="ee1" value="Integral">
										</label>

										<label for="ee2">
											<b style="color:#0076BC">Parcial</b><br><small>(tengo otra actividad profesional no relacionada con el voleibol)</small><br>
											<input type="radio" name="eb" id="ee2" value="Parcial">
										</label>
									</div>
								</div>

								<br>

								<div class="question redbold" id="ec" onload="ec_set()">
									<p><b><?php echo $alpha[$q++] ?>.</b> Sobre la experiencia como entrenador de jugadores en edad escolar (hasta la categoría juvenil, esta incluida):</p>


									<label for="ec1">
										<input type="radio" name="ec" id="ec1" value="Mayor parte/totalidad">
										He actuado la mayor parte del tiempo o en la totalidad de mi carrera como entrenador
									</label>

									<br>

									<label for="ec2">
										<input type="radio" name="ec" id="ec2" value="Menor parte">
										He actuado la menor parte del tiempo de mi carrera como entrenador
									</label>

									<br>

									<label for="ec3">
										<input type="radio" name="ec" id="ec3" value="Prácticamente nunca o nunca he actuado con jugadores en edad escolar">
										Prácticamente nunca o nunca he actuado con jugadores en edad escolar
									</label>

									<br>

									<div id="ec_anos" style="display: none">
										<label for="ec_text">Aproximadamente, ¿cuántos años?</label><br>
										<input type="number" name="ec_anos" id="ec_text" class="value" min="0" step="1">
									</div>
								</div>

								<br>

								<div class="question redbold" id="ed" onload="ed_set()">
									<p><b><?php echo $alpha[$q++] ?>.</b> Título de entrenador/a que posee actualmente válido en España:</p>

									<label for="ed1">
										<input type="radio" name="ed" id="ed1" value="Minivolley">
										Minivolley
									</label>

									<br>

									<label for="ed2">
										<input type="radio" name="ed" id="ed2" value="Nivel 1">
										Nivel 1
									</label>

									<br>

									<label for="ed3">
										<input type="radio" name="ed" id="ed3" value="Nivel 2">
										Nivel 2
									</label>

									<br>

									<label for="ed4">
										<input type="radio" name="ed" id="ed4" value="Nivel 3">
										Nivel 3
									</label>

									<br>

									<label for="ed5">
										<input type="radio" name="ed" id="ed5" value="Internacional">
										Internacional (1, 2 o 3)
									</label>

									<br>

									<label for="ed6">
										<input type="radio" name="ed" id="ed6" value="Otro">
										Otra formación/título
									</label>

									<div id="ed6_cual" style="display: none">
										<label for="ed6_text">¿Cuál?</label><br>
										<input type="text" name="ed_cual" id="ed6_text" class="short">
									</div>
								</div>

								<br>

								<div class="question redbold" id="ubica">
									<p><b><?php echo $alpha[$q++] ?>.</b> Ubicación donde actúa como entrenador:</p>

									<label for="ubica1">
										<input type="radio" name="ubica" id="ubica1" value="Estado español">
										Estado español
									</label>

									<br>

									<label for="ubica2">
										<input type="radio" name="ubica" id="ubica2" value="Otro">
										Otro país
									</label>

									<div id="ubica2_cual" style="display: none">
										<label for="ubica2_text">¿Cuál?</label><br>
										<input type="text" name="ubica_cual" id="ubica2_text" class="short">
									</div>
								</div>

								<br>

								<div class="question redbold" id="ef">
									<p><b><?php echo $alpha[$q++] ?>.</b> Comunidad Autónoma en la que actúa como entrenador:</p>
									<select class="select" name="ee" id="">
										<?php
										for($i = 0; $i < sizeof($comunidad); $i++)
										{
											if ($i != 0)
											{
											?>
											<option value="<?php echo $comunidad[$i]?>"><?php echo $comunidad[$i]?></option>
											<?php
											}
											else 
											{
												?>
												<option value="No informado" selected disabled><?php echo $comunidad[$i]?></option>
												<?php
											}
										}
										?>
									</select>
								</div>

								<br>
								
								<div class="question redbold" id="eg">
									<p><b><?php echo $alpha[$q++] ?>.</b> Edad</p>
									<input type="number" class="value" min="0" step="1" name="ef">&nbsp;años
								</div>

								<br>

								<div class="question redbold" id="eh">
									<p><b><?php echo $alpha[$q++] ?>.</b> Me identifico como:</p>
									<label for="eg1">
										<input type="radio" name="eg" id="eg1" value="Hombre" > Hombre
									</label>
									&nbsp;&nbsp;&nbsp;
									<label for="eg2">
										<input type="radio" name="eg" id="eg2" value="Mujer"> Mujer
									</label>
									&nbsp;&nbsp;&nbsp;
									<label for="eg3">
										<input type="radio" name="eg" id="eg3" value="Otro"> Otro
									</label>
									&nbsp;&nbsp;&nbsp;
									<label for="eg4">
										<input type="radio" name="eg" id="eg4" value="Prefiero no responder"> Prefiero no responder
									</label>
								</div>

								<br>

								<div class="question redbold" id="ei">
									<p><b><?php echo $alpha[$q++] ?>.</b> Formación Académica finalizada:</p>
										
										<div class="ehcat ehcat1" id="ehcat1">
											<label for="" class="ehcatlbl"><b>Educación Primaria, Secundaria y FP (seleccione 
											la mayor formación)</b></label>

											<label for="eh1" id="foreh1">
												<input type="radio" name="ehcat1" id="eh1" value="Educación primaria">
												Educación Primaria
											</label>

											<label for="eh2" id="foreh2">
												<input type="radio" name="ehcat1" id="eh2" value="Educación Secundaria Obligatoria (ESO)">
												Educación Secundaria Obligatoria (ESO)
											</label>

											<label for="eh3" id="foreh3">
												<input type="radio" name="ehcat1" id="eh3" value="Bachillerato">
												Bachillerato
											</label>

											<label for="eh4" id="foreh4">
												<input type="radio" name="ehcat1" id="eh4" value="Formación Profesional de Grado Medio o similar">
												Formación Profesional de Grado Medio (o similar)
											</label>
											
											<label for="eh5" id="foreh5">
												<input type="radio" name="ehcat1" id="eh5" value="Formación Profesional de grado superior o similar">
												Formación Profesional de Grado Superior (o similar)
											</label>

											<label for="eh9" id="foreh9">
												<input type="radio" name="ehcat1" id="eh9" value="Otra formación">
												Otra formación?
												<br>
											</label>

											<div id="eh_rad1" class="blackbold" style="visibility: hidden">
												<label for="eh_rad1">Relacionada con el área de la Educación Física, la Actividad Física o el Deporte:</label><br>
												
												<label for="ehr1s">
													<input type="radio" name="eh_rad1" id="ehr1s" value="Sí"> Sí
												</label>
												&nbsp;&nbsp;&nbsp;
												<label for="ehr1n">
													<input type="radio" name="eh_rad1" id="ehr1n" value="No"> No
												</label>
											</div>
											
											<div id="eh9_text" style="display: none">
												<label for="eh9_cual">¿Cuál?</label>
												&nbsp;<textarea name="eh_cual" id="eh9_cual"></textarea>
											</div>
										</div>

										<div class="ehcat ehcat2" id="ehcat2" style="opacity: 0.5" disabled>	
											<label for="" class="ehcatlbl"><b>Enseñanza Universitaria</b></label>

											<label for="eh6" id="foreh6">
												<input type="checkbox" name="ehcat2" id="eh6" value="Diplomatura, Grado o Licenciatura">
												Diplomatura, Grado o Licenciatura
											</label>

											<div id="eh_rad2" class="blackbold" style="visibility: hidden">
												<label for="eh_rad2">Relacionado/a con el área de la Educación Física, la Actividad Física o el Deporte:</label><br>
												
												<label for="ehr2s">
													<input type="radio" name="eh_rad2" id="ehr2s" value="Sí"> Sí
												</label>
												&nbsp;&nbsp;&nbsp;
												<label for="ehr2n">
													<input type="radio" name="eh_rad2" id="ehr2n" value="No"> No
												</label>
											</div>
										</div>

										<div class="ehcat ehcat3" id="ehcat3" style="opacity: 0.5" disabled>
											<label for="" class="ehcatlbl"><b>Postgrado (seleccione más de uno si necesario)</b></label>

											<label for="eh7" id="foreh7">
												<input type="checkbox" name="ehcat3_1" id="eh7" value="Máster o Posgrado">
												Máster o posgrado
											</label>
											
											<div id="eh_rad3_1" class="blackbold" style="visibility: hidden">
												<label for="eh_rad3_1">Relacionado con el área de la Educación Física, la Actividad Física o el Deporte:</label><br>
												
												<label for="ehr3_1s">
													<input type="radio" name="eh_rad3_1" id="ehr3_1s" value="Sí"> Sí
												</label>
												&nbsp;&nbsp;&nbsp;
												<label for="ehr3_1n">
													<input type="radio" name="eh_rad3_1" id="ehr3_1n" value="No"> No
												</label>
											</div>

											<label for="eh8" id="foreh8">
												<input type="checkbox" name="ehcat3_2" id="eh8" value="Doctorado">
												Doctorado
											</label>

											<div id="eh_rad3_2" class="blackbold" style="visibility: hidden">
												<label for="eh_rad3_2">Relacionado con el área de la Educación Física, la Actividad Física o el Deporte:</label><br>
												
												<label for="ehr3_2s">
													<input type="radio" name="eh_rad3_2" id="ehr3_2s" value="Sí"> Sí
												</label>
												&nbsp;&nbsp;&nbsp;
												<label for="ehr3_2n">
													<input type="radio" name="eh_rad3_2" id="ehr3_2n" value="No"> No
												</label>
											</div>
											
										</div>
										
										<br>
								</div>
								
							</div>

							<div id="apF" class="apartado">
								<h3 class="titApartado"><b>F.</b> Sobre el cuestionario y la participación en este estudio</h3>
								<hr class="apartado">
								
								<div class="question redbold">
									<!-- <p><b>a.</b></p> -->
									<label for="informe">
										<input type="checkbox" name="informe" id="informe" value="Sí"> Deseo recibir el informe final de la investigación
									</label>
									<br>
									<label for="sorteo" class="disabled" title="La participación en el sorteo está encerrada, pero puede seguir contestando el cuestionario normalmente, sus datos serán registrados. ¡Muchas gracias!">
										<input type="checkbox" name="sorteo" id="sorteo" value="Sí" disabled> Deseo participar en el sorteo de la tarjeta regalo de una tienda de material deportivo
									</label>
								</div>

								<div class="question redbold" id="email" style="display:none">
									<div>Si ha seleccionado una de las opciones anteriores, por favor informe su correo-electrónico</div>
									<input type="email" name="email" class="short" maxlength="255" placeholder="Introduzca su e-mail..." id="inputEmail">

									<br><br>

									<div>Por favor, confirma su correo-electrónico</div>
									<input type="email" class="short" maxlength="255" placeholder="Confirma su e-mail..." id="confirmEmail">
									
									<br>
									
									<div id="warning" style="display:none">
										<b>¡Los correos electrónicos deben ser iguales!</b>
									</div>
								</div>
								
								<p>
									<small>
									<b style='color: #BE1521'>*</b>La participación está condicionada a que el cuestionario se quede correctamente rellenado, sin excesivas cuestiones en blanco (puede volver a los apartados anteriores si desea completar cuestiones en blanco).
									</small>
								</p>
							</div>

							
							<div class="btnsDiv">
								<div class="pageDiv">
									<a onclick="pageChange(-1)" class="page_btn ant" id="ant">Anterior</a>
									<a onclick="pageChange(1)" class="page_btn prox" id="prox">Siguiente</a>
								</div>
								<div class="submitDiv">
									<input type="submit" class="enviar submit" value="Enviar" id="submit" name="subFinal">
								</div>
							</div>
						</form>

						<label for="" class="page_control"></label>
						<?php
							
					// 	}
					// 	else{
					// 		senha(true);
					// 	}
					// }
					// else{
					// 	senha(false);
					// }
					
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
										<script>page = 1</script>
										<small class="redbold"><b>Contraseña incorrecta.</b></small>

										<?php
							
						}
						
						?>
										<br>
										<input type="submit" class="entrar" value="Entrar">
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

	<script type="text/javascript" src="../js/cuestionario.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/page_loader.js"></script>

</html>
