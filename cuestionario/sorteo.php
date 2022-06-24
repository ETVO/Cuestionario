<!DOCTYPE html>
<html lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<link rel="stylesheet" type="text/css" href="../main.css">
	</head>
<?php
echo 'Cargando confirmación...<br>';

if(isset($_GET['key']))
{
    include "../model/mysql.php";

    try {
        $key = $_GET['key'];
        $sql = "SELECT pk_key FROM rsorteo WHERE pk_key='$key'";
        
        $res = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0)
        {
            $sql = "UPDATE rsorteo SET confirmado = true WHERE pk_key='$key'";
        
            $res = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0)
            {
                echo '<b style="color:#0076BC">¡Participación confirmada!<b><br>¡Muchas gracias!';
            }
            else
            {
                echo mysqli_error($conn);
            }
        }
        else
        {
            echo '<b style="color:#BE1521">¡Clave inexistente!</b>';
        }
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
}
else
{
    header("Location: ..");
}

?>

</html>