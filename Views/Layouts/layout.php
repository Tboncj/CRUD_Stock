<?php
ob_start();

include_once('header.php');
?>
<div class="container">
	<?php
		// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
        require_once('routes/routing.php');
        if (isset($erro['error'])){
            ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $erro["error"]; ?>
            </div>
            <?php
        }
	?>
</div>
<?php
include_once('footer.php');

ob_end_flush();
?>