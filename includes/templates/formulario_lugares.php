<div class="flex">
        <div class="flex-01 p-2">
            <div class="form-group">
                <label for="">Nombre de Lugar</label>
                <input type="text" name="lugar[nombre]" class="form-control" value="<?php echo $lugar->nombre ?>">
            </div>

            <div class="form-group">
                <label for="">Descripcion</label>
                <textarea name="lugar[descripcion]" id="" class="form-control"><?php echo $lugar->descripcion ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Departamento</label>
                <input type="text" name="lugar[departamento]" class="form-control" value="<?php echo $lugar->departamento ?>">
            </div>
            <div class="form-group">
                <label for="">Provincia</label>
                <input type="text" name="lugar[provincia]" class="form-control" value="<?php echo $lugar->provincia ?>">
            </div>
            <div class="form-group">
                <label for="">Distrito</label>
                <input type="text" name="lugar[distrito]" class="form-control" value="<?php echo $lugar->distrito ?>">
            </div>
        </div>
        <div class="flex-01 p-2">
            <div class="form-group">
                <label for="">Imagen</label>
                <input type="file" name="lugar[imagen]" class="form-control" value="<?php echo $lugar->imagen ?>">
                <?php if($lugar->imagen){ ?>
                    <img src="/imagenes/<?php echo $lugar->imagen ?>"  style="margin: 10px 0; width: 150px;" alt="">
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="number" name="lugar[precio]" class="form-control" value="<?php echo $lugar->precio ?>">
            </div>
            <div class="form-group">
                <label for="">Descuento</label>
                <input type="number" name="lugar[descuento]" step="0.01" value="<?php echo $lugar->descuento ?>" class="form-control">
            </div>
        </div>
    </div>