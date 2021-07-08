<div class="flex-2">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="usuarios[nombre]" value="<?php echo $usuario->nombre ?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="usuarios[apellido]" value="<?php echo $usuario->apellido ?>">
        </div>
    </div>
    <div class="flex-2">
        <div class="mb-3">
            <label for="dni" class="form-label">D.N.I</label>
            <input type="text" class="form-control" id="dni" name="usuarios[dni]" value="<?php echo $usuario->dni ?>">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control"id="direccion" name="usuarios[direccion]" value="<?php echo $usuario->direccion ?>">
        </div>
    </div>
    <div class="flex-2">
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" id="email" name="usuarios[email]" value="<?php echo $usuario->email ?>">
        </div>
    </div>