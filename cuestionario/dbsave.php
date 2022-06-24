<!DOCTYPE html>
<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
        if(typeof(Storage) !== "undefined")
        {
            sessionStorage.setItem("page", 1);
        }
	</script>
	<head>
		<meta charset="UTF-8">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript" src="../js/dbsave.js"></script>

		<link rel="stylesheet" type="text/css" href="../main.css">
	</head>
<?php
    include "../model/util.php";

    echo "Cargando...<br>";

    session_start();

    $alpha = range('a', 'z');

    if(isset($_SESSION['inicio']))
    {
        $inicio = $_SESSION['inicio'];
    }
    else
    {
        $inicio = date('Y-m-d H:i:s');
    }


    if(isset($_POST['subFinal']))
    {
        try {
            $fim = date('Y-m-d H:i:s');

            $c = 42;
            $cn = 2;
            $e = 8;
            $f = 2;

            $name = "rfinal";

            $sql = "INSERT INTO $name VALUES(DEFAULT,";

            $sql .= "'" . $inicio . "', ";
            $sql .= "'" . $fim . "', ";

            $sql .= (isset($_POST['bnivel'])) ? "'" . utf8_decode($_POST['bnivel']) . "', " : "'No informado', ";

            for($j = 0; $j < $cn; $j++)
            {
                $amb = 0;
                $item = $alpha[$j];
                for($i = 1; $i < $c+1; $i++)
                {   
                    if(($i-1) % 6 == 0)
                        $amb+=1;

                    $sql .= (isset($_POST["c" . $i . $item])) ? $_POST["c" . $i . $item] . ", " : "0, ";
                }
            }

            $sql .= "'" . utf8_decode($_POST['c43']) . "', ";

            $sql .= (isset($_POST['d1'])) ? "'" . utf8_decode($_POST['d1']) . "', " : "'No informado', ";
            $sql .= "'" . utf8_decode($_POST['d2']) . "', ";

            for($i = 0; $i < $e; $i++)
            {
                $ia = $alpha[$i];

                if($ia == 'h')
                {
                    $ec = 3;
                    for($j = 1; $j < $ec+1; $j++)
                    {
                        if($j == 3)
                        {
                            $ec3 = 2;
                            for($a = 1; $a < $ec3+1; $a++)
                            {
                                $sql .= (isset($_POST["e" . $ia . "cat" . $j . "_" . $a])) ? "'" . utf8_decode($_POST["e" . $ia . "cat" . $j . "_" . $a]) . "', " : "null,";
                                $sql .= (isset($_POST["e" . $ia . "_rad" . $j . "_" . $a])) ? "'" . utf8_decode($_POST["e" . $ia . "_rad" . $j . "_" . $a]) . "', " : "null,";
                            }
                        }
                        else
                        {
                            // if($j == 1 && isset($_POST["e" . $ia . "cat" . $j]) && $_POST["e" . $ia . "cat" . $j] == 'Otra')
                            // {
                            //     if()
                            //     {

                            //     }
                            // }
                            // else
                            // {
                            $sql .= (isset($_POST["e" . $ia . "cat" . $j])) ? "'" . utf8_decode($_POST["e" . $ia . "cat" . $j]) . "', " : "null,";
                            // }
                            
                            $sql .= (isset($_POST["e" . $ia . "_rad" . $j])) ? "'" . utf8_decode($_POST["e" . $ia . "_rad" . $j]) . "', " : "null,";
                        }
                    }
                }
                else
                {
                    if($ia == 'a' || $ia == 'f')
                    {
                        if(isset($_POST["e" . $ia]))
                        {
                            $val = utf8_decode($_POST["e" . $ia]);
                            if($val == '')
                                $val = 0; 
                        }
                        else
                        {
                            $val = 0;
                        }
                        $sql .= $val . ", ";
                    }
                    else
                        $sql .=  (isset($_POST["e" . $ia])) ? "'" . utf8_decode($_POST["e" . $ia]) . "', " : "'No informado', ";
                }

                if($ia == 'd' || $ia == 'h')
                {
                    $sql .= "'" . utf8_decode($_POST["e" . $ia . "_cual"]) . "', ";
                }
                
                if($ia == 'c')
                {
                    if(isset($_POST["e" . $ia . "_anos"]))
                    {
                        $val = utf8_decode($_POST["e" . $ia . "_anos"]);
                        if($val == '')
                            $val = 0; 
                    }
                    else
                    {
                        $val = 0;
                    }
                    $sql .= $val . ", ";
                }

                if($ia == 'd')
                {
                    if(isset($_POST['ubica']))
                    {
                        if($_POST['ubica'] == 'Otro')
                        {
                            $sql .= (isset($_POST["ubica_cual"])) ? "'" . utf8_decode($_POST["ubica_cual"]) . "', " : "'No informado', ";
                        }
                        else
                        {
                            $sql .= "'" . utf8_decode($_POST["ubica"]) . "', ";
                        }
                    }
                    else
                    {
                        $sql .=  "'No informado', ";
                    }
                }
            }

            
            $sql .= (isset($_POST["informe"])) ? "'" . utf8_decode($_POST["informe"]) . "', " : "'No', ";
            $sql .= (isset($_POST["sorteo"])) ? "'" . utf8_decode($_POST["sorteo"]) . "', " : "'No', ";
            $sql .= (isset($_POST["email"])) ? "'" . utf8_decode($_POST["email"]) . "', " : "'No', ";

            $sql .= "false";

            $sql .= ");";

            include "../model/mysql.php";
            
            $res = mysqli_query($conn, $sql);

            $sent = false;

            if(mysqli_affected_rows($conn) > 0){
                
                $sql = "SELECT LAST_INSERT_ID();";

                $res = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0)
                {
                    $row = mysqli_fetch_array($res, MYSQLI_NUM);

                    $id = $row[0];

                    $_SESSION['id_resposta'] = $id;

                    $sql = "SELECT email, sorteo FROM $name WHERE id_resposta = $id";
	
                    $res = mysqli_query($conn, $sql);
            
                    if(mysqli_affected_rows($conn) > 0)
                    {
                        $row = mysqli_fetch_array($res, MYSQLI_NUM);

                        $email = $row[0];
                        $sorteo = utf8_encode($row[1]);

                        if($email != '' && $sorteo == 'Sí')
                        {
                            try {
                                include "../model/email/email.php";

                                $rnum = random_int(100, 999);

                                $key = md5($email.$rnum.$id);

                                $recipient = $email;
                                $name = $email;
                                $subject = "Confirmación del sorteo - voleibol-competencias.com";
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

                                <p>El sorteo será realizado el <b style='font-size:1.5em'>30 de abril del 2020</b> o hasta que se consiga el número necesario de participantes. Nos pondremos en contacto a través del correo electrónico informado por usted notificando se ha sido premiado.</p>
                                
                                <p>Salutaciones cordiales,
                                <h4>
                                    Doctoranda Martina Kieling<br>
                                    <a href='mailto:martina@voleibol-competencias.com?Subject=Cuestionario'>martinakielingsebold@ub.edu</a>
                                </h4>

                                <p>
                                    <small>
                                    <b style='color: #BE1521'>*</b>La participación está condicionada a que el cuestionario se quede correctamente rellenado, sin excesivas cuestiones en blanco.
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

                                sendEmail($recipient, $name, $subject, $msg);
                                $sent = true;

                                $sql = "INSERT INTO rsorteo VALUES ('$key', '$email', DEFAULT)";

                                $res = mysqli_query($conn, $sql);

                                if(mysqli_affected_rows($conn) > 0)
                                {
                                    echo '¡Participación en el sorteo registrada!';
                                }
                                else
                                {
                                    echo '¡Error al registrar la participación en el sorteo!<br>Más detalles:'.mysqli_error($conn);
                                }
                            }
                            catch (Exception $e) {
                                echo '¡Se produjo un error al intentar enviar el e-mail de confirmación! '.$e->getMessage()  ;
                            }
                        }
                    }
                    else
                    {
                        echo '¡Se produjo un error al intentar recuperar la dirección de su e-mail!';
                    }
                    
                    if($sent)
                    {
                        echo '<script>
                                $(document).ready(function() {
                                    var delay = 3200;
                                    exito(delay, "¡Respuesta registrada!\A Revisa la bandeja de entrada de tu e-mail.");
                                    setTimeout(function() { window.location.href="../grafico?id_resposta='.$id.'"; }, delay);
                                });
                            </script>';
                    }
                    else
                    {
                        echo '<script>
                                $(document).ready(function() {
                                    var delay = 3200;
                                    exito(delay, "¡Respuesta registrada con éxito!");
                                    setTimeout(function() { window.location.href="../grafico?id_resposta='.$id.'"; }, delay);
                                });
                            </script>';
                    }
                        
                }
            } 
            else
            {
                // $error = mysqli_error($conn);
                // echo $sql;
                echo "<script>
                        $(document).ready(function() {
                            var delay = 2500;
                            mal(delay, '¡Ninguna línea encontrada!');
                            setTimeout(function() { window.location.href='..'; }, delay);
                        });
                    </script>";
            }

        } 
        catch (Exception $e)
        {
            $message = $e->getMessage();
            echo "<script>
                    $(document).ready(function() {
                        var delay = 2500;
                        mal(delay, '$message');
                        setTimeout(function() { window.location.href='../'; }, delay);
                    });
                </script>";
        }
    }
    else
    {
        $message = '¡Usted debe rellenar el Cuestionario para acceder a esta página!';
        echo "<script>
            var delay = 2500;
            mal(delay, '$message');
            window.location.href='../';
        </script>";
    }


?>

</html>