<?php 

require_once './helper.php';

auth_or_exit();

$table = '';
$id = '';
$excluido = '';
$url = 'index.php?p=registros';

if(isset($_GET['table']) && isset($_GET['id']) && isset($_GET['excluido'])) {
    $table = $_GET['table'];
    $id = $_GET['id'];
    $excluido = $_GET['excluido'];
    $url = $_GET['url'];
}

$sql = "UPDATE $table SET excluido = $excluido WHERE id_resposta = $id";

$res = mysqli_query($conn, $sql);

echo $url;

header("Location: $url");

?>

Cargando...