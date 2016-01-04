<?php
$servername = "localhost";
$username = "root";
$password = "k6dM2SS1BJc1";
$dbname = "learning_bd";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 