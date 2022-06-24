<!DOCTYPE html>
<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
        if(typeof(Storage) !== "undefined")
        {
            sessionStorage.setItem("ppage", 1);
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

    session_destroy();
    session_start();

    if(isset($_POST['subPiloto']))
    {
        try {
            $fim = date('Y-m-d H:i:s');

            $c = 42;
            $e = 8;
            $f = 3;

            $sql = "INSERT INTO rpiloto VALUES(DEFAULT,";

            $sql .= "'" . $inicio . "', ";
            $sql .= "'" . $fim . "', ";

            $sql .= (isset($_POST['bnivel'])) ? "'" . utf8_decode($_POST['bnivel']) . "', " : "'No informado', ";

            for($j = 0; $j < 2; $j++)
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
                if($ia == 'd')
                {
                    $ec = 3;
                    for($j = 1; $j < $ec+1; $j++)
                    {
                        $sql .= (isset($_POST["e" . $ia . "cat" . $j])) ? "'" . utf8_decode($_POST["e" . $ia . "cat" . $j]) . "', " : "null,";
                        $sql .= (isset($_POST["e" . $ia . "_rad" . $j])) ? "'" . utf8_decode($_POST["e" . $ia . "_rad" . $j]) . "', " : "null,";
                    }
                }
                else
                {
                    if($ia == 'b' || $ia == 'f')
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

                if($ia == 'c' || $ia == 'd')
                {
                    $sql .= "'" . utf8_decode($_POST["e" . $ia . "_cual"]) . "', ";
                }
                
                if($ia == 'h')
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
            }

            for($i = 0; $i < $f; $i++)
            {
                $ia = $alpha[$i];
                $sql .= (isset($_POST["f" . $ia])) ? "'" . utf8_decode($_POST["f" . $ia]) . "', " : "'No informado', ";
            }

            $sql .= "false";

            $sql .= ");";

            include "../model/mysql.php";
            
            $res = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0){
                $sql = "SELECT LAST_INSERT_ID();";

                $res = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0)
                {
                    $row = mysqli_fetch_array($res, MYSQLI_NUM);

                    $id = $row[0];

                    $_SESSION['id_resposta'] = $id;
                    
                    echo '<script>
                            $(document).ready(function() {
                                var delay = 2000;
                                exito(delay, "¡Respuesta registrada con sucesso!");
                                setTimeout(function() { window.location.href="../grafico"; }, delay);
                            });
                        </script>';
                }
            } 
            else
            {
                // $error = mysqli_error($conn);
                echo "<script>
                        $(document).ready(function() {
                            var delay = 2500;
                            mal(delay, '¡Ninguna línea encontrada!');
                            setTimeout(function() { window.location.href='../'; }, delay);
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
        echo "<script>alert('Usted debe rellenar el cuestionario piloto para acceder a esta página!');
        window.location.href='../';</script>";
    }


?>

</html>