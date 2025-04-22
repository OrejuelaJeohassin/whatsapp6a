<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Sexos</title>
    <link rel="stylesheet" href="/whatsapp6a/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listado de Sexos</h1>

    <div class="actions">
        <a href="/whatsapp6a/app/views/sexo/create.php">
            <button type="button" aria-label="Agregar un nuevo sexo">Agregar Sexo</button>
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($sexos) && is_array($sexos)): ?>
                <?php foreach ($sexos as $sexo): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($sexo['id']); ?></td>
                        <td><?php echo htmlspecialchars($sexo['nombre']); ?></td>
                        <td>
                            <a href="/whatsapp6a/public/sexo/edit?id=<?php echo urlencode($sexo['id']); ?>">
                                <button type="button" aria-label="Editar <?php echo htmlspecialchars($sexo['nombre']); ?>">Editar</button>
                            </a>
                            <a href="/whatsapp6a/public/sexo/eliminar?id=<?php echo urlencode($sexo['id']); ?>" 
                               onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                <button type="button" class="btn-delete" aria-label="Eliminar <?php echo htmlspecialchars($sexo['nombre']); ?>">Eliminar</button>
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

