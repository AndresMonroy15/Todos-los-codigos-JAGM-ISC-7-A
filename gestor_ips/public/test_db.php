<?php
require_once __DIR__ . '/../config.php';

if ($conn) {
    echo "✅ Conexión exitosa a la base de datos gestor_ips.";
} else {
    echo "❌ Error en la conexión: " . $conn->connect_error;
}
?>

