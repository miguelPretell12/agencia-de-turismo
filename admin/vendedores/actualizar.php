<?php

require '../../includes/app.php';
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

estaAutenticado();

$id = $_GET['id'];
$id = filter_var($id,FILTER_VALIDATE_INT);

if(!$id){
    header('location: /admin/vendedores/');
}
$vendedor = Vendedor::find($id);

//Arreglo de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    //Asignar los atributos
    $args = $_POST['vendedor'];
    $vendedor->sincronizar($args);

    $errores = $vendedor->validar();

    //General un nombre unico
    $nombreImagen = md5(uniqid(rand(),true)).".jpg";

    if($_FILES['vendedor']['tmp_name']['imagen']){
        $image = Image::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
        $vendedor->setImagen($nombreImagen);
    }
    if(empty($errores)){
        if($_FILES['vendedor']['tmp_name']['imagen']){
            $image->save(CARPETA_IMAGENES.$nombreImagen);
        }

        $resultado = $vendedor->actualizar();
        if($resultado){
            redireccionar('vendedores/index');
        }
    }
}

templates('header_admin');

?>
    <h1>Actualizar vendedor</h1>
    <form method="POST"  enctype="multipart/form-data" class="p-5">
        <?php include '../../includes/templates/formulario_vendedor.php'; ?>
        <div class="mb-3">
            <a href="/admin/vendedores/" class="btn btn-secondary">Volver</a>
            <input type="submit" class="btn btn-primary w-150" value="Enviar">
        </div>
    </form>


<?php

templates('footer_admin');
?>