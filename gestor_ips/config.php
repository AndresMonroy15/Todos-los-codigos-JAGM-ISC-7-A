<?php
$host = 'localhost';
$user = 'root';
$password = ''; // en XAMPP normalmente está vacío
$database = 'gestor_ips';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
