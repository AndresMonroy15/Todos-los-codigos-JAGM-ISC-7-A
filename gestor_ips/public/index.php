<?php
require_once __DIR__ . '/../controller/IpController.php';
require_once __DIR__ . '/../config.php';

$controller = new IpController($conn);

// Verificamos si se envió formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store($_POST);
}

// Verificamos si hay petición de eliminar
if (isset($_GET['delete'])) {
    $controller->delete($_GET['delete']);
}

// Si no, mostramos lista
$controller->index();
?>


