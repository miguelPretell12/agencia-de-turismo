<?php
require '../../includes/app.php';
estaAutenticado();

use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;
$vendedor = new Vendedor();

//Arreglo con mensaje de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Se crea una nueva instancia
    $vendedor = new Vendedor($_POST['vendedor']);

    /* SUBIDA DE ARCHIVOS img */
    //Gnerar un nombre unico a la imagen que se insertara
    $nombreImagen = md5(uniqid(rand(),true)).".jpg";

    if($_FILES['vendedor']['tmp_name']['imagen']){
        $image = Image::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
        $vendedor->setImagen($nombreImagen);
    }

    //Se validara los errores
    $errores = $vendedor->validar();
    if(empty($errores)){
        //crear la carpeta para subir imagenes
        if(!is_dir(CARPETA_IMAGENES)){
            mkdir(CARPETA_IMAGENES);
        }
        
        $image->save(CARPETA_IMAGENES.$nombreImagen);
        $resultado = $vendedor->crear();
        if($resultado){
            redireccionar('vendedore/index');
        }
    }
}

templates('header_admin');

 
?>


    <?php foreach($errores as $error): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $error.'<br>'; ?>
        </div>            
    <?php endforeach; ?>
    <h1>Registrar Empleado</h1>
    <form method="POST" enctype="multipart/form-data" class="p-5">
        <?php include '../../includes/templates/formulario_vendedor.php' ?>

        <div class="mb-3">
            <a href="/admin/vendedores/" class="btn btn-secondary">Volver</a>
            <input type="submit" class="btn btn-primary w-150" value="Guardar Cambios">
        </div>
    </form>
<?php   
    templates('footer_admin');
?>