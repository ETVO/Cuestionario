<?php
    session_start();

    include "../../util/util.php";

    if(isset($_SESSION['adminMD5'])) {
        if($_SESSION['adminMD5'] != getSenha()) {
            echo "<script>window.location.href = '../index.php'</script>";
            exit;
        }
    }
    else {
        echo "<script>window.location.href = '../index.php'</script>";
        exit;
    }

    include '../../model/mysql.php';

    $sql = "SELECT * FROM rpiloto WHERE 1 AND excluido = 0 ORDER BY id_resposta ASC";
    $filename = "cuestionario_piloto.csv";

    query_to_csv($conn, $sql, $filename, true, true);

    mysqli_close($conn);
?>