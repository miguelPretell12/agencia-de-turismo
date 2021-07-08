        <div class="flexc-2">
            <div class="mb-3">
                <label for="codigo">Código de Paquete</label>
                <input type="text" name="paquete[codpaquete]" class="w-25 form-control" id="codigo" value="<?php echo $paquete->codpaquete ?>">
            </div>
            <div class="mb-3">
                <label for="contenido">Contenido de Paquete</label>
                <textarea name="paquete[contenido]" class="w-50 h-20 form-control" id="contenido"><?php echo $paquete->contenido ?></textarea>
            </div>
        </div>
        
        <div class="flex">
            <div class="mb-3">
                <label for="precio">Precio</label>
                <input type="number" name="paquete[precio]" id="precio" step="0.01" class="form-control" value="<?php echo $paquete->precio ?>">
            </div>
        </div>
        <div class="flex-2">
            <div class="mb-3">
                <label for="categoria">Categoría</label>
                <select name="paquete[categoria]" id="categoria" class="form-control">
                    <option value="">--seleccione--</option>
                    <option value="bronce">Bronce</option>
                    <option value="plata">Plata</option>
                    <option value="oro">Oro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descuento">Descuento</label>
                <input type="number" name="paquete[descuento]" id="descuento" step="0.01" class="form-control" value="<?php echo $paquete->descuento ?>">
            </div>
        </div>