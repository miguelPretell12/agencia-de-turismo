<?php

use App\Vendedor;

require 'includes/app.php';
$db = conectarDB();

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $auth = new Vendedor($_POST);

    $errores = $auth->validarLogin();
    if(empty($errores)){
        $resultado = $auth->existeUsuario();
        if(!$resultado){
            $errores[] = "el usuario no existe";
        }else {
            //verificar el password si el usuario existe
            $autenticar = $auth->comprobarPassword($resultado);
            if($autenticar){
                $auth->autenticar();
            }else{
                $errores[] = "La contraseña es incorrecta";
            } 
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP Turismo</title>
    <link rel="icon" type="image/png" href="img/user.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="login w-100 h-100">
        <img src="/img/img1.jpg" alt="" class="w-100 h-100">
        <div class="formulario">
        <?php
            foreach($errores as $error){?>
                <div  class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
        <?php    }
        ?>
            <form method="post" id="formulario">
                <img src="img/user.png" alt="" class="imagen">
                <div class="form-group pt-2">
                    <label for="users">Usuario</label>
                    <input type="text" class="form-control" name='usuario' id="users">
                </div>
                <div class="form-group pt-2">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name='contrasena' id="password">
                </div>
                <div class="form-group pt-2">
                    <input type="submit" id="enlace"  class="btn btn-primary w-100" value="Iniciar Sesión">
                </div>
                <div class="form-group center mt-2">
                    <a href="#" class="enlance">Recuperar Contraseña</a>
                </div>
            </form>
        </div>
    </div>

    <script src="/js/script1.js"></script>
</body>

</html>