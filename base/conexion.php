<?php
$servername = "localhost";
$username = "root";
$password = "amazon5web1";
$dbname = "bd_learning";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}