<?php

use App\Lugar;
use Intervention\Image\ImageManagerStatic as Image;
include '../../includes/app.php';
    templates('header_admin');
    $lugar = new Lugar();
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $lugar = new Lugar($_POST['lugar']);
       

        //Nombre de imagen unico
        $nombreU = md5(uniqid(rand(),true)).'.jpg';

        if($_FILES["lugar"]["tmp_name"]["imagen"]){
            $image = Image::make($_FILES["lugar"]["tmp_name"]["imagen"])->fit(800,700);
            $lugar->setImagen($nombreU);
        }
        $errores = $lugar->erroresForm();
        if(empty($errores)){

            //Crear un directorio para las imagenes
            if(!is_dir(CARPETA_IMAGENES)){
                mkdir(CARPETA_IMAGENES);
            }

            $image->save(CARPETA_IMAGENES.$nombreU);

            $resultado = $lugar->crear();
            if($resultado){
                redireccionar("lugares/index");
            }
        }
    }
?>
<h2>Registrar Lugares Turistico</h2>
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