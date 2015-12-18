<?php
$id = $_GET['id'];

require 'conexion.php';


$sql = "SELECT * FROM test WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
    echo "Registro Agregado";
    $consulta = "SELECT * FROM test;";
    $resultado = $conn->query($consulta);    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
foreach ($resultado as $value)
   {
   echo $value;
   }