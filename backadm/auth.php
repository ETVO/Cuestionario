<?php

include '../util/util.php';

session_start();

if (!isset($_SESSION['pass'])) {
    if (isset($_POST['pass'])) {
        $pass = md5($_POST['pass']);
        $_SESSION['pass'] = $pass;
    }
}
header('Location: index.php');

?>

Cargando...