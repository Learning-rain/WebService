<?php

global $conn;
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$tabla = basename($_FILES["tablaToUpload"]["name"]);
$icono = basename($_FILES["fileToUpload"]["name"]);
$autor = $_POST['autor'];
$anio = $_POST['anio'];
$num_preguntas = $_POST['num_preguntas'];
$ultima_actualiza = $_POST['ultima_actualiza'];

print "tabla:" . $tabla . "<br>" . "icono:" . $icono . "<br>";
require 'conexion.php';

/* Upload icono */

$target_dir = "iconos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
//        insertReg($titulo, $descripcion, $tabla, $icono, $autor, $anio, $num_preguntas, $ultima_actualiza);
        /*         * insertar* */
        /** almacenar registro en la BD* */
        $sql = "INSERT INTO test
            (`titulo`,
            `descripcion`,
            `tabla`,
            `icono`,
            `autor`,
            `anio`,
            `num_preguntas`,
            `ultima_actualiza`)
            VALUES
            ('$titulo', '$descripcion', '$tabla', '$icono', '$autor', '$anio ', '$num_preguntas', '$ultima_actualiza');";

        if ($conn->query($sql) === TRUE) {
            echo "Registro Agregado";
            $consulta = "SELECT * FROM test;";
            $resultado = $conn->query($consulta);
            print_r($resultado);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();

//header('Location: index.php');
