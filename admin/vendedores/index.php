<?php
include '../../includes/app.php';

use App\Vendedor;
$vendedores = Vendedor::all();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        $vendedor= Vendedor::find($id);
        $resultado = $vendedor->eliminar();
        if($resultado){
            $vendedor->borrarImagen();
            header('location: /admin/vendedores');
        }
    }
}

templates('header_admin');    
?>
    <div> 
        <h2>Lista Empleados</h2>
    </div>
    <div>
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="/admin/vendedores/crear.php">
        Registrar Empleado
        </a>
    </div>
    <div class="table-responsive p-15">
        <table class="table table-striped" style="width:100%"  id='example' >
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Usuario</th>
                    <th>Imagen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($vendedores as $vendedor){ ?>
              <tr>
                <td><?php echo $vendedor->nombre;  ?></td>
                <td><?php echo $vendedor->apellido; ?></td>
                <td><?php echo $vendedor->correo;  ?></td>
                <td><?php echo $vendedor->telefono;  ?></td>
                <td><?php echo $vendedor->usuario;  ?></td>
                <td><img width='150px' src="/imagenes/<?php echo $vendedor->imagen?>" alt=""></td>
                <td>
                  <a class="btn btn-warning" href="/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id?>">Editar</a>
                  <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $vendedor->id ?>">
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                  </form>
                </td>
              </tr>
              <?php }?>
            </tbody>
        </table>    
    </div>
<?php
    templates('footer_admin')
?>