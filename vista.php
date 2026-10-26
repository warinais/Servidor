<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li><?= htmlspecialchars($producto) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>