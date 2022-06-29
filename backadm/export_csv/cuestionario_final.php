<?php 

require_once './../helper.php';

auth_or_exit();

$showDeleted = 0;

if(isset($_GET['excluidos']) && $_GET['excluidos']) {
    $showDeleted = 1;
}

$sql = "SELECT * FROM rfinal";
if(!$showDeleted) {
    $sql .= " WHERE excluido = 0 ORDER BY excluido ASC";
}

$filename = "cuestionario_final.csv";

query_to_csv($conn, $sql, $filename, true, true);
?>