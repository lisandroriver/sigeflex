<form action="NuevaImagen.php" method="post" enctype="multipart/form-data">
    <label for="imagen">Selecciona tu imagen de perfil:</label>
    <input type="file" name="imagen" id="imagen" accept="image/*" required>
    <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>"> <!-- Cambia esto por el ID del usuario logueado -->
    <button type="submit">Subir Imagen</button>
</form>
