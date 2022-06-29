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
    
    $name = "rfinal";
    $graf_title = "Evaluación y dominio general\nsobre las competencias";

    $ntot = getCn();

    $a = array();
    $b = array();
	
    if($id_set) {
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
                
                if($email_set)
                {
                    $sql = "SELECT " . $a_str[$i] . " FROM $name WHERE email = '$email' AND excluido = 0";
                }
                else
                {
                    $sql = "SELECT " . $a_str[$i] . " FROM $name WHERE id_resposta = $id AND excluido = 0";
                }
        
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

                if($email_set)
                {
                    $sql = "SELECT " . $b_str[$i] . " FROM $name WHERE email = '$email' AND excluido = 0";
                }
                else
                {
                    $sql = "SELECT " . $b_str[$i] . " FROM $name WHERE id_resposta = $id AND excluido = 0";
                }
        
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>
		<script type="text/javascript" src="../js/grafico1.js?n=1"></script>

		<title>Recuperar Grafico - Competencias del Voleibol</title>
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
                <h3 style="margin: 0; text-align: left">Recuperar Grafico</h3>
                <p class="admActions" style="margin-top: 0; <?php if(!$id_set) echo "display:none;" ?>">
                    <a href="recuperar_grafico.php">Nueva busca</a>
                </p>
                
                <?php
                    if($id_set) {

                        ?>

                            <div id="id_set">
                                <div class="tesis">
                                    <h3><?php echo ($email_set) ? "<small>Email</small><br>$email" : "<small>Id</small><br>$id"; ?></h3>
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

                                <br>
                                <div id="grafico">
                                </div>
                                <button onclick="saveCanvas('Grafico - Estudio Final - Martina Kieling')">
                                Descargar grafico</button>
                            </div>

                        <?php
                        
                    } else {
                        ?>

                            <div id="not_set">
                                <form class="question recupere" method="post">
                                    <label for="filtro"><b>Buscar por:</b></label> 
                                    <br>
                                    <select class="select" id="filtro" onchange="atualizaRecupere()">
                                        <option value="numero" selected>Identificación</option>
                                        <option value="correo">Correo-Eletrónico</option>
                                    </select>
                                    
                                    <br><br>

                                    <div id="numero">
                                        <label for="numero_input"><b>Identificación</b></label>
                                        <br>
                                        <input type="number" class="value" name="id_resposta" id="numero_input" min="1" step="1"  pattern="[0-9]{10}" required="true">
                                    </div>

                                    <div id="correo" style="display: none">
                                        <label for="correo_input"><b>Correo-Eletrónico</b></label>
                                        <br>
                                        <input type="email" class="short" name="email" id="correo_input" maxlength="255">
                                    </div>
                                    
                                    <br>
                                    <input type="submit" class="entrar" name="subGrafico" value="Buscar">
                                </form>
                            </div>

                        <?php
                    }
                ?>

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

        <script>
            function atualizaRecupere()
            {
                var select = document.getElementById("filtro");
                
                var id1 = "numero";
                var div1 = document.getElementById(id1);
                var input1 = document.getElementById(id1 + "_input");

                var id2 = "correo";
                var div2 = document.getElementById(id2);
                var input2 = document.getElementById(id2 + "_input");

                if(select.value == id1)
                {
                    div1.style = "display: block";
                    input1.required = true;

                    div2.style = "display: none";
                    input2.required = false;
                    input2.value = "";
                }
                else 
                {
                    div1.style = "display: none";
                    input1.required = false;
                    input1.value = "";

                    div2.style = "display: block";
                    input2.required = true;
                }
            }
        </script>
	</body>

</html>