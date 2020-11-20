<?php
ini_set ( 'display_errors', 1 );
error_reporting ( E_ALL );
// include_once 'controller/user_session.php';

// $userSession = new UserSession();
//cargar la plantilla con la header y el footer
session_start();
require_once('Views/Layouts/layout.php');

?>