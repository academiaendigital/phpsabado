<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_medico";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Fallo la conexion: " . $conn->connect_error);
}
echo "Conexion exitosa";


?>