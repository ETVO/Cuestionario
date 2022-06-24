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

    $name = "rfinal";
    $graf_title = "Evaluación y dominio general\nsobre las competencias";

    $ntot = getCn();

    $a = array();
    $b = array();
	
    try 
    {
        include "../model/mysql.php";
        $a_str = array("cI1a,cI2a,cI3a,cI4a,cI5a,cI6a", "cII7a,cII8a,cII9a,cII10a,cII11a,cII12a",
        "cIII13a,cIII14a,cIII15a,cIII16a,cIII17a,cIII18a", "cIV19a,cIV20a,cIV21a,cIV22a,cIV23a,cIV24a",
        "cV25a,cV26a,cV27a,cV28a,cV29a,cV30a", "cVI31a,cVI32a,cVI33a,cVI34a,cVI35a,cVI36a",
        "cVII37a,cVII38a,cVII39a,cVII40a,cVII41a,cVII42a");

        for($i = 0; $i < sizeof($a_str); $i++)
        {
            $cat = explode(',', $a_str[$i]);
            foreach($cat as &$item) {
                $item = "AVG(" . $item . ")";
            }
            $a_str[$i] = implode(",", $cat);

            $sql = "SELECT " . $a_str[$i] . " FROM $name WHERE excluido = 0";
    
            $res = mysqli_query($conn, $sql);
    
            if(mysqli_affected_rows($conn) > 0)
            {
                $row = mysqli_fetch_array($res, MYSQLI_NUM);
                
                $a[$i] = array_sum($row) / sizeof($row);
            }
        }

        $b_str = array("cI1b,cI2b,cI3b,cI4b,cI5b,cI6b", "cII7b,cII8b,cII9b,cII10b,cII11b,cII12b",
        "cIII13b,cIII14b,cIII15b,cIII16b,cIII17b,cIII18b", "cIV19b,cIV20b,cIV21b,cIV22b,cIV23b,cIV24b",
        "cV25b,cV26b,cV27b,cV28b,cV29b,cV30b", "cVI31b,cVI32b,cVI33b,cVI34b,cVI35b,cVI36b",
        "cVII37b,cVII38b,cVII39b,cVII40b,cVII41b,cVII42b");

        for($i = 0; $i < sizeof($b_str); $i++)
        {
            $cat = explode(",", $b_str[$i]);
            foreach($cat as &$item) {
                $item = "AVG(" . $item . ")";
            }
            $b_str[$i] = implode(",", $cat);

            $sql = "SELECT " . $b_str[$i] . " FROM $name WHERE excluido = 0";
    
            $res = mysqli_query($conn, $sql);
    
            if(mysqli_affected_rows($conn) > 0)
            {
                $row = mysqli_fetch_array($res, MYSQLI_NUM);
                
                $b[$i] = array_sum($row) / sizeof($row);
            }
        }

    }
    catch (Exception $e)
    {
        $message = $e->getMessage();
        echo "<script>alert('¡Algo salió mal! Más detalles: $message!');
        window.location.href='index.php';</script>";
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
		<link rel="stylesheet" type="text/css" href="admin.css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
		<script type="text/javascript" src="../js/main.js?n=1"></script>
		<script type="text/javascript" src="../js/grafico1.js?n=1"></script>

		<title>Graficos Generales - Competencias del Voleibol</title>
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
				<h3 style="margin-top: 0; text-align: left">Graficos Generales</h3>
                
                <div class="datatable">
                    <table>
                        <caption>Promedios</caption>
                        <tr>
                            <td>
                            </td>
                            <th class="a" id="a">
                                Evaluación
                            </th>
                            <th class="b" id="b">
                                Dominio
                            </th>
                        </tr>

                        <form>
                            <input type="hidden" name="" id="graf_title" value="<?php echo $graf_title?>">

                            <?php 
                                for($i = 0; $i < sizeof($a); $i++) {

                                    $roman = integerToRoman($i + 1);
                                    ?>
                                        <tr>
                                            <td class="cat">
                                                <?php echo $roman; ?>
                                            </td>
                                            <td class="a">
                                                <?php echo round($a[$i], 2); ?>
                                            </td>
                                            <input type="hidden" id="<?php echo $roman . 'a'; ?>" value="<?php echo $a[$i] ?>">

                                            <td class="b">
                                                <?php echo round($b[$i], 2); ?>
                                            </td>
                                            <input type="hidden" id="<?php echo $roman . 'b'; ?>" value="<?php echo $b[$i] ?>">
                                        </tr>
                                    <?
                                }
                            ?>
                        </form>
                    </table>
                </div>

                <br>

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
                <button onclick="<?php echo "saveCanvas('Grafico General - Estudio Final - Martina Kieling')"; ?>">
                Descargar grafico general</button>

                <hr>
                <p class="admActions">
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

</html>