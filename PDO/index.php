<?php 
require_once('config.php');

$sql = new SQL();

$login = 'Jose';
$password = '121421421';

$usuarios = $sql->select('SELECT * FROM Usuarios');

echo json_encode($usuarios)
?>