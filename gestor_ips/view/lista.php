<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Direcciones IP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f9; }
        h1 { background: #0078d7; color: white; padding: 15px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        th { background: #0078d7; color: white; }
        tr:nth-child(even) { background: #f9f9f9; }
        a, button { padding: 6px 12px; text-decoration: none; border-radius: 6px; cursor: pointer; }
        .btn-add { background: #28a745; color: white; border: none; }
        .btn-delete { background: #dc3545; color: white; border: none; }
    </style>
</head>
<body>
    <h1>Gestor de Direcciones IP</h1>

    <form action="formulario.php" method="get">
        <button type="submit" class="btn-add">+ Agregar nueva IP</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Dirección IP</th>
            <th>Usuario</th>
            <th>Inventario</th>
            <th>Área</th>
            <th>Acciones</th>
        </tr>
        <?php if (!empty($ips)): ?>
            <?php foreach ($ips as $ip): ?>
                <tr>
                    <td><?= $ip['id'] ?></td>
                    <td><?= $ip['direccion_ip'] ?></td>
                    <td><?= $ip['usuario'] ?></td>
                    <td><?= $ip['inventario'] ?></td>
                    <td><?= $ip['area'] ?></td>
                    <td>
                        <a href="index.php?delete=<?= $ip['id'] ?>" class="btn-delete" onclick="return confirm('¿Eliminar este registro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay direcciones IP registradas.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
