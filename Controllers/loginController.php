<?php
include_once "config/db.php";
include_once('Models/usuariosModel.php');

class LoginController
{
    private $model;
    function __construct(){
        $this->model= new UsuariosModel();
    }
    public function validaLogin()
    {
        $usr = $_POST['usuario'];
        $pws = $_POST['password'];

        $status = $this->model->userExist($usr, $pws);


        if ($status===TRUE) {
            # Login correcto
            $_SESSION['login']="ACTIVO";
            header('Location: index.php');

        }else {
            $erro['error']="Nombre de usuario y/o password son incorrectos.";
            include_once('Views/login.php');
        }


    }
    public function salir(){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
}

?>