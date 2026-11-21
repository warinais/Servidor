<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Teléfono</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= htmlspecialchars($usuario['id']) ?></td>
            <td><?= htmlspecialchars($usuario['nombre']) ?></td>
            <td><?= htmlspecialchars($usuario['telf']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>