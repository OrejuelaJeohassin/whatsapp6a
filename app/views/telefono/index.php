<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de telefonos</title>
    <link rel="stylesheet" href="/whatsapp6a/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Lista de telefonos</h1>
    <a href="/whatsapp6a/app/views/telefono/create.php"><button>Agregar</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($telefonos) && is_array($sexos)): ?>
                <?php foreach ($telefonos as $telefonos): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($telefonos['idtelefono']); ?></td>
                        <td><?php echo htmlspecialchars($telefonos['numero']); ?></td>
                        <td>
    <a href="/whatsapp6a/public/telefono/edit?idtelefono=<?php echo htmlspecialchars($sexo['idtelefono']); ?>">
        <button>Editar</button>
    </a>
    <a href="/whatsapp6a/public/telefono/eliminar?idtelefono=<?php echo htmlspecialchars($sexo['idtelefono']); ?>" 
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
