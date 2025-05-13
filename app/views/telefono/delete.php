<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elininar Telefono</title>
</head>
<body>

<h1>Editar Telefono</h1>
<form action="/whatsapp6a/public/telefono/delete" method="POST">
    <input type="hidden" name="idtelefono" value="<?php echo htmlspecialchars($telefono['idtelefono']); ?>">
    
    <label for="numero">Mumero:</label>
    <input type="text" name="numero" id="numero" value="<?php echo htmlspecialchars($idtelefono['numero']); ?>" required>
    
    <input type="submit" value="Eliminar">
</form>

<a href="index">Volver al listado</a>

</body>
</html>
