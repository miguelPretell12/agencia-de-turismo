<?php

use App\Usuario;

include '../../includes/app.php';
    templates('header_admin');

    $usuarios = Usuario::all();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);

        $resultado = Usuario::find($id);
        $rst = $resultado->eliminar();

        if($rst){
            redireccionar('usuarios/index');
        }
    }
?>
    <div>
        <h2>Lista de Clientes</h2>
    </div>
    <div>
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="/admin/usuarios/crear.php">
        Registrar clientes
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" style="width:100%"  id='example' >
            <thead>
                <th>Apellido y Nombre</th>
                <th>D.N.I</th>
                <th>Correo Electronica</th>
                <th>Direccion</th>
                <th></th>
            </thead>
            <tbody>

                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->apellido.', '.$usuario->nombre ?></td>
                        <td><?php echo $usuario->dni; ?></td>
                        <td><?php echo $usuario->email; ?></td>
                        <td><?php echo $usuario->direccion;?> </td>
                        <td>
                            <a class="btn btn-warning mb-2" href="/admin/usuarios/actualizar.php?id=<?php echo $usuario->id?>">Editar</a>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
    templates('footer_admin')
?>