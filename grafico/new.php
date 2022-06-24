<?php
	
	include "../util/util.php";

    $name = "rfinal";
    // $graf_title = "Evaluación y dominio general\nsobre las competencias";

	session_start();

    if(isset($_SESSION['md5']))
    {
        if($_SESSION['md5'] != getSenha())
        {
            session_destroy();
            header("Location: index.php");
        }
    }
    else
    {
        session_destroy();
        header("Location: index.php");
    }

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
		<link rel="stylesheet" href="../grafico/style.css?n=1">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="../config/libraries/sisyphus/sisyphus.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
		<script type="text/javascript" src="../js/main.js?n=1"></script>
		<script type="text/javascript" src="../js/grafico1.js?n=1"></script>

		<title>Grafico General - Competencias del Voleibol</title>
	</head>

	<body>

        <form>
            <input type="hidden" name="" id="graf_title" value="<?php echo $graf_title?>">

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


		<div id="conteudo">
			<div class="top show">
				<div class="nav">
					<ul>
						<li><a href="../">Inicio</a></li>
						<li><a href="../cuestionario">Cuestionario</a></li>
						<li><a href="../info">Informaciones</a></li>
					</ul>
				</div>
			</div>

			<div class="dropdown">
				<div class="title">
                    Grafico
				</div>
				<button onclick="dropMenu()" class="dropdown_btn">Menu</button>
				<div id="" class="dropdown_content">
					<a href="../">Inicio</a>
					<a href="../cuestionario" id="active">Cuestionario</a>
					<a href="../info">Informaciones</a>
				</div>
			</div>

			<center>
                <div class="content">
                    <br>
                    <div class="tesis">
                        <h2 style="margin-top: 0;">Grafico General</h2>
                    </div>
                    
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

                            <?php 
                                for($i = 0; $i < sizeof($a); $i++) {
                                    ?>
                                        <tr>
                                            <td class="cat">
                                                <?php echo integerToRoman($i + 1) ?>
                                            </td>
                                            <td class="a">
                                                <?php echo round($a[$i], 2); ?>
                                            </td>
                                            <td class="b">
                                                <?php echo round($b[$i], 2); ?>
                                            </td>
                                        </tr>
                                    <?
                                }
                            ?>
                        </table>
                    </div>

                    <br>

                    <div class="legContainer" id="legenda">
                        <div>
                            <div class="legGrid">
                                <div class="box" id="red"></div> 
                                <div class="legLbl">Evaluación</div>
                            </div>
                        </div>
                        <div>
                            <div class="legGrid">
                                <div class="box" id="blue"></div> 
                                <div class="legLbl">Dominio</div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div id="grafico">
                    </div>
                    <button onclick="<?php echo "saveCanvas('Grafico General - Estudio Final - Martina Kieling')"; ?>">
                    Descargar grafico general</button>
                </div>

				<div id="rodape" onload="rodape()">@ 2018<br><b>Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</b><br>Sitio desarollado por <a class='neutral' href='https://www.linkedin.com/in/estevaoprolim/' target='_blank'>EstevÃ£o Rolim</a>.</div>
			</center>


		</div>
	</body>

</html>