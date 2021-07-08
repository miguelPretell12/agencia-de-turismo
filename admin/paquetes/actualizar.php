<?php

use App\Paquete;

include '../../includes/app.php';
    templates('header_admin');
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);

    $paquete = Paquete::find($id);
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $args = $_POST['paquete'];
        $paquete->sincronizar($args);

        $errores = $paquete->erroresForm();
        if(empty($errores)){
            $resultado=$paquete->actualizar();

            if($resultado){
                redireccionar('paquetes/index');
            }
        }
    }
?>
<h2>Registrar paquete</h2>
<div class="text-center flex-center" id="alert">
    <?php foreach($errores as $error): ?>
        <div class="alert alert-danger w-50 ">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>
</div>
<form method="post" class="p-4">
        <?php include '../../includes/templates/formulario_paquete.php'; ?>
        <div class="flex-1">
            <div class="mb-3">
                <a href="/admin/paquetes/" class="btn btn-secondary mb-3">Volver</a>
                <input type="submit" class="btn btn-primary w-150 mb-3" value="Guardar Cambios">
            </div>
        </div>

</form>
<?php
    templates('footer_admin')
?>