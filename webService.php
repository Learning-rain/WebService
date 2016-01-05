<?php

header('Content-type: application/json');
require_once 'conexion.php';

$id = filter_input(INPUT_GET, 'id');
$consulta = "SELECT * FROM test WHERE id=" . $id;
$resultado = $conn->query($consulta);
print json_encode($resultado);