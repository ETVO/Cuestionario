<?php 
    session_start();
    
    unset($_SESSION['recordar']);
    unset($_SESSION['adminMD5']);

    header("Location: login.php");
?>