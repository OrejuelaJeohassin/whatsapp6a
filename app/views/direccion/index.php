<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar direcciones</title>
    <link rel="stylesheet" href="/whatsapp6a/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listar  direcciones</h1>
    <a href="/whatsapp6a/app/views/direccion/create.php"><button>Agregar</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($direccion) && is_array($direccion)): ?>
                <?php foreach ($direccion as $direccion): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($direccion['iddireccion']); ?></td>
                        <td><?php echo htmlspecialchars($direccion['nombre']); ?></td>
                        <td>
    <a href="/whatsapp6a/public/direccion/edit?iddireccion=<?php echo htmlspecialchars($direccion['iddireccion']); ?>">
        <button>Editar</button>
    </a>
    <a href="/whatsapp6a/public/direccion/eliminar?iddireccion=<?php echo htmlspecialchars($direccion['iddireccion']); ?>" 
       onclick="return confirm('¿Estás seguro de eliminar este registro?');">
        <button>Eliminar</button>
    </a>
</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="/whatsapp6a/public/js/script.js"></script>
</body>
</html>
