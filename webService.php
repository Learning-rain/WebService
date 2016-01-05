<?php

header('Content-type: application/json');
require_once 'conexion.php';

$id = filter_input(INPUT_GET, 'id');
$result = mysqli_query($conn, "SELECT * FROM test WHERE id=" . $id);   
while($row = mysqli_fetch_assoc($result))
    $test[] = $row; 
print json_encode($test);