<?php

$ruta='';

if ( isset($_GET['menu']) ) {
	
	$ruta = $_GET['menu'];
}

switch ($ruta) {
	case 'signup':
		# code...
		require_once('views/signup/signup.php');
		break;
		
	case 'registrar':
		require_once("controller/loginController.php");
		break;
	case 'login':
		require_once('Views/login.php');
		break;
	case 'validate':
        require_once("Controllers/loginController.php");
        $obj = new LoginController();
        $obj->validaLogin();
		break;
	case 'logout':
		# Ejecutamos el controller para logout
        require_once("Controllers/loginController.php");
        $obj = new LoginController();
        $obj->salir();
        break;
	case 'stock':
		if (isset($_SESSION['login'])) {
			require_once("Controllers/stockController.php");
			$st = new StockController();
			$st->listarStock();
		}		
		break;
	case "grabarStock":
		if (isset($_SESSION['login'])) {
			require_once("Controllers/stockController.php");
			$st = new StockController();
			$st->grabarStock();
		}
		break;
	case "editarStock":
		if (isset($_SESSION['login'])) {
			require_once("Controllers/stockController.php");
			$st = new StockController();
			$st->editarStock();
		}
		break;
	case "eliminarStock":
		if (isset($_SESSION['login'])) {
			require_once("Controllers/stockController.php");
			$st = new StockController();
			$st->eliminarStock();
		}
		break;
	case 'buscarRegistro':
		if (isset($_SESSION['login'])) {
			require_once("Controllers/stockController.php");
			$st = new StockController();
			$st->buscarStock();
		}
		break;
    default:
		// echo "Inicio default";
		
		break;
}
?>