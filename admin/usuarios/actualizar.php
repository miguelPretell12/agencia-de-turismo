<?php

use App\Usuario;

include '../../includes/app.php';
    templates('header_admin');
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    $errores = [];
    $usuario = Usuario::find($id);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $args = $_POST['usuarios'];
        $usuario->sincronizar($args);

        $errores = $usuario->getErroresForm();
        if(empty($errores)){
            $resultado = $usuario->actualizar();
            if($resultado){
                redireccionar('usuarios/index');
            }
        }
    }
?>
<h2>Actualizacion de cliente</h2>
<div class="text-center flex-center" id="alert">
    <?php foreach($errores as $error): ?>
        <div class="alert alert-danger w-50 ">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>
</div>
<form action="" method="post" class="p-4">
    <?php include '../../includes/templates/formulario_usuario.php' ?>
    <div class="flex-1">
        <div class="mb-3">
            <a href="/admin/usuarios/" class="btn btn-secondary mb-3">Volver</a>
            <input type="submit" class="btn btn-primary w-150 mb-3" value="Guardar Cambios">
        </div>
    </div>
</form>
<?php
    templates('footer_admin')
?>