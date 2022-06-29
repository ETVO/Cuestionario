<?php

include '../util/util.php';

session_start();

$auth = false;

if (isset($_SESSION['pass'])) {
    $pass = $_SESSION['pass'];
    if ($pass == getSenha()) {
        $auth = true;
    }
}

$page = '';

if(isset($_GET['p'])) {
    $page = $_GET['p'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Competencias del Voleibol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container my-4">
        <h1 class="fs-6 text-uppercase fw-light mb-0">Administración</h1>
        
        

        <?php if ($auth) {
            ?>
            <a class="small text-decoration-none" href="logout.php">
                <span class="bi-box-arrow-left me-1"></span>Cerrar sesión
            </a> 
            <?php

            switch($page) {
                case 'registros':
                    include_once './pages/registros.php';
                    break;

                case 'grafico':
                    include_once './pages/grafico.php';
                    break;

                case 'general':
                    include_once './pages/general.php';
                    break;

                default:
                    include_once './pages/panel.php';
                    break;
            }
        } else {
            include 'login.php';
        ?>
        <?php
        } ?>
        <hr class="mb-2">
        <a class="small text-decoration-none" href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http" . '://' . $_SERVER['SERVER_NAME']; ?>">
            <span class="bi-arrow-left me-1"></span>Página principal
        </a>
        <small class="d-block fw-light">
            <b>Competencias y necesidades formativas de entrenadores de voleibol en edad escolar</b>.
            <br> Martina K. S. B. Rolim &copy; <?php echo date('Y'); ?>
        </small>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./admin.js"></script>
</body>

</html>