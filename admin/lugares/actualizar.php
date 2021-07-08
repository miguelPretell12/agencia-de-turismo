<?php

use App\Lugar;
use Intervention\Image\ImageManagerStatic as Image;

include '../../includes/app.php';
    templates('header_admin');
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);
    $lugar = Lugar::find($id);
    $errores= [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $args = $_POST['lugar'];
        $lugar->sincronizar($args);

        $errores = $lugar->erroresForm();
        //General un nombre unico
        $nombreImagen = md5(uniqid(rand(),true)).".jpg";

        if($_FILES['lugar']['tmp_name']['imagen']){
            $image = Image::make($_FILES['lugar']['tmp_name']['imagen'])->fit(800,600);
            $lugar->setImagen($nombreImagen);
        }
        if(empty($errores)){
            if($_FILES['lugar']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES.$nombreImagen);
            }

            $resultado = $lugar->actualizar();
            if($resultado){
                redireccionar('lugares/index');
            }
        }
    }
?>
<h2>Actualizacion del lugar <?php echo $lugar->nombre ?></h2>
<div class="text-center flex-center" id="alert">
    <?php foreach($errores as $error): ?>
        <div class="alert alert-danger w-50 ">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>
</div>
<form action="" method="POST" enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_lugares.php'; ?>
    <div class="flex-1">
        <div class="mb-3">
            <a href="/admin/lugares/" class="btn btn-secondary mb-3">Volver</a>
            <input type="submit" class="btn btn-primary w-150 mb-3" value="Guardar Cambios">
        </div>
    </div>

</form>
<?php
    templates('footer_admin')
?>