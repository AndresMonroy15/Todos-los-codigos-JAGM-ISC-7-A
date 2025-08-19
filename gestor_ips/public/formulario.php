<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Dirección IP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f9; }
        h1 { background: #0078d7; color: white; padding: 15px; border-radius: 8px; }
        form { background: white; padding: 20px; border-radius: 8px; max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 15px; background: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer; }
        a { display: inline-block; margin-top: 10px; text-decoration: none; color: #0078d7; }
    </style>
</head>
<body>
    <h1>Agregar Nueva Dirección IP</h1>

    <form action="index.php" method="post">
        <label>Dirección IP:</label>
        <input type="text" name="direccion_ip" required>

        <label>Usuario:</label>
        <input type="text" name="usuario" required>

        <label>Inventario:</label>
        <input type="text" name="inventario" required>

        <label>Área:</label>
        <input type="text" name="area" required>

        <button type="submit">Guardar</button>
    </form>

    <a href="index.php">← Volver a la lista</a>
</body>
</html>
