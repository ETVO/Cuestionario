<?php 

require_once './../helper.php';

auth_or_exit();

$sql = "SELECT * FROM rsorteo";
$filename = "lista_sorteo.csv";

query_to_csv($conn, $sql, $filename, true, true);
?>