<?php
$id = $_GET['id'];

require 'conexion.php';

if ($conn->query($sql) === TRUE) {
    echo "Registro Agregado";
    $consulta = "SELECT * FROM test WHERE id=".$id;
    $resultado = $conn->query($consulta);    
        foreach ($resultado as $value)
           {
           echo $value;
           }    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
