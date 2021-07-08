<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" id="nombre" name="vendedor[nombre]" class="form-control" value="<?php echo s($vendedor->nombre) ?>">
</div>
<div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" id="apellido" name="vendedor[apellido]" class="form-control"  value="<?php echo s($vendedor->apellido) ?>" >
</div>
<div class="mb-3">
    <label for="email" class="form-label">Correo Electronico</label>
    <input type="email" id="correo" name="vendedor[correo]" class="form-control" value="<?php echo s($vendedor->correo) ?>">
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="tel" id="telefono" name="vendedor[telefono]" class="form-control" value="<?php echo s($vendedor->telefono) ?>" >
</div>
<div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" id="usuario" name="vendedor[usuario]" class="form-control" value="<?php echo s($vendedor->usuario) ?>" >
</div>
<div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" id="contrasena" name="vendedor[contrasena]" class="form-control" value="<?php echo s($vendedor->contrasena) ?>" >
</div>

<div class="mb-3">
  <label for="imagen" class="form-label">Imagen</label>
  <input class="form-control" type="file" name="vendedor[imagen]">
  <?php if($vendedor->imagen): ?>
    <img src="/imagenes/<?php echo $vendedor->imagen?>" class="img-100">
  <?php endif;?>
</div>