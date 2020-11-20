<div class="row justify-content-md-center">
    <div class="col-md-7 col-md-offset-7">
        <h3>Editar de Stock</h3>
        <div class="abs-center">
            <form action="?menu=editarStock" method="POST" class="border p-3 form">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $frm->nombre ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $frm->cantidad ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-2 col-form-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="color" name="color" value="<?php echo $frm->color ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $frm->precio ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="descripcion">Descripción</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" rows="2"><?php echo $frm->descripcion ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id" name="id" value="<?php echo $frm->IdStock ?>">
                <button class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
</div>