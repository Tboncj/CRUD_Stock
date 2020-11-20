<div class="row justify-content-md-center">
    <div class="col-md-7 col-md-offset-7">
        <h3>Inventario de Stock</h3>
        <div class="abs-center">
            <form action="?menu=grabarStock" method="POST" class="border p-3 form">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-2 col-form-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="precio">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="descripcion">Descripción</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" rows="2"></textarea>
                    </div>
                </div>
                <button>Enviar</button>
            </form>
        </div>
        <br>
        <div class="abs-center">
            <form class="form-inline" id="frmfind" action="?menu=buscarRegistro" method="POST">

                <div class="form-group mx-sm-3 mb-2">
                    <label for="cadena" class="sr-only">Buscar </label>
                    <input type="text" class="form-control" id="cadena" name="cadena" placeholder="Buscar por nombre o descripción">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="precio" class="sr-only">precio </label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Buscar por precio">
                </div>
                <div class="form-group mx-sm-3 mb-1 ">
                    <label for="categoria" class="sr-only">por</label>
                    <select name="categoria" id="categoria" style="width:300px" class="form-control" placeholder="por" style="width: 30% !important;">
                        <option value=""></option>
                        <?php
                        foreach ($colores as $key) {
                            $color = $key->color;
                        ?>
                            <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!-- <div class="form-group  "> -->
                <button type="submit" class="btn btn-primary mb-2"><span class="fa fa-search"></span></button>
                <!-- </div> -->
            </form>
        </div>
        <br>

    </div>
    <table class="table display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Stock as $key) {
            ?>
                <tr>
                    <td><?php echo $key->nombre; ?></td>
                    <td><?php echo $key->cantidad; ?></td>
                    <td><?php echo $key->color; ?></td>
                    <td><?php echo number_format($key->precio,2); ?></td>
                    <td><?php echo $key->descripcion; ?></td>
                    <td>
                        <a href="?menu=editarStock&id=<?php echo $key->IdStock; ?>" id="update" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>
                        <a href="?menu=eliminarStock&id=<?php echo $key->IdStock; ?>" id="delete" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>