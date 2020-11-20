<div class="container  h-100  d-flex justify-content-center align-items-center">
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto  form p-4">
        <div class="abs-center">
            <form class="border p-3 form bg-info paddin-top-20" action="?menu=validate" method="POST">
                <?php
                if (isset($erro['error'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $erro["error"]; ?>
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="usuario" name="usuario" id="usuario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
</div>