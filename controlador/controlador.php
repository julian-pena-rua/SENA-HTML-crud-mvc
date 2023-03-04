<?php
    require_once("../modelo/Usuario.php");

    $usuario = new usuario();
    $datos = $usuario->getUsuarios();
    
    require_once("../vista/vista.php");
?>