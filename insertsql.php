<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$tabla = $_POST['tabla'];
$icono = $_POST['icono'];
$autor = $_POST['anio'];
$num_preguntas = $_POST['num_preguntas'];
$ultima_actualiza = $_POST['ultima_actualiza'];
//print 'llego:'. $titulo .'descripcion:  '. $descripcion;

require 'conexion.php';

//$sql = "SELECT * FROM test";
//$result = $conn->query($sql);
//print_r($result);


    $sql = "INSERT INTO test
            (`id`,
            `titulo`,
            `descripcion`,
            `tabla`,
            `icono`,
            `autor`,
            `anio`,
            `num_preguntas`,
            `ultima_actualiza`)
            VALUES
            ('$id', '$titulo', '$descripcion', '$tabla', '$icono', '$autor', '$num_preguntas', '$ultima_actualiza');";

    if ($conn->query($sql) === TRUE) {
        echo "Registro Agregado";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



$conn->close();
parent::redirect("index.php");