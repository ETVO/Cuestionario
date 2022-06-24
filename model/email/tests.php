<?php
	include "email.php"; //Incluindo esse arquivo "email.php", já é possível utilizar a função abaixo, sendEmail()
	try
	{
		$fa = 'tevo.pr@gmail.com';
		$rnum = random_int(100, 999);
		$id = 28;

		$key = md5($fa.$rnum.$id);
		echo $key.'<br>';

		$recipient = $fa;
		$name = 'Estevão';
		$subject = "(Protótipo) Confirmación del sorteo - voleibol-competencias.com";
		$msg = "
		<head>
			<link href='https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap' rel='stylesheet'>
			<style>
				* {
					font-family: 'Nunito Sans', sans-serif;
				} 
			</style>
		<head>
		<h4>Estimado entrenador, estimada entrenadora,</h4>

		<p>¡Muchas gracias por participar del estudio ‘Las competencias profesionales y las necesidades formativas del entrenador de voleibol implicado en el deporte en edad escolar’!</p>
		
		<p>Esa es la confirmación que rellenó correctamente el campo con su correo electrónico y por tanto podrás participar en el sorteo de una tarjeta regalo<b style='color: #BE1521'>*</b> de una tienda de material deportivo en el valor de <b>100€</b>.</p>

		<p>El sorteo será realizado el <b style='font-size:1.5em'>31 de marzo del 2020</b>. Nos pondremos en contacto a través del correo electrónico informado por usted notificando se ha sido premiado.</p>
		
		<p>Salutaciones cordiales,
		<h4>
			Doctoranda Martina Kieling<br>
			<a href='mailto:martina@voleibol-competencias.com?Subject=Cuestionario'>martinakielingsebold@ub.edu</a>
		</h4>

		<p>
			<small>
			<b style='color: #BE1521'>*</b>La participación está condicionada a que el cuestionario se quede correctamente rellenado, sin excesivas cuestiones en blanco (puedes volver a los apartados anteriores si desea completar cuestiones en blanco).
			</small>
		<p>

		<hr><br>

		<h4>
			<img src='https://www.goeco.org/_media/media/19/12394.png' style='width: 150px'/>
			<br>
			Doctorado en Actividad Física, Educación Física y Deporte<br>
			Facultad de Educación<br>
			Universidad de Barcelona<br>
			<a href='https://www.ub.edu/portal/web/educacion/actividad-fisica-educacion-fisica-y-deporte' target='_blank' style='color: #BE1521'>
				https://www.ub.edu/portal/web/educacion/actividad-fisica-educacion-fisica-y-deporte
			</a>
		</h4>
		</p>";
			
		echo $msg;

		sendEmail($recipient, $name, $subject, $msg);
		
		echo "Email enviado com sucesso para $recipient!";
	} catch(Exception $e){
		echo "\nAlgo deu errado! ".$e->getMessage();
	}

	$img = '<img src="https://www.goeco.org/_media/media/19/12394.png"/>';
?>