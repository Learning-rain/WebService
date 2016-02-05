<?php
$servername = "localhost";
$username = "root";
//$password ='';
$password = "k6dM2SS1BJc1";
$dbname = "learning_bd";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
//$db_host="localhost"; 
//$db_usuario="root"; 
//$db_password=""; 
//$db_nombre="learning_bd"; 
//$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error()); 
//$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());
