<?php

    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj= new crud();

    $datos=array(
        $_POST['titulo'],
        $_POST['fecha'],
        $_POST['nota'],
        $_POST['in'],
        $_POST['ga'],
        $_POST['me'],
        $_POST['hi'],
        $_POST['pe'],
        $_POST['mu'],
        $_POST['du'],
        $_POST['gr'],
        $_POST['di'],
        $_POST['so'],
        $_POST['traduccion'],
        $_POST['dificultad']
    );

    echo $obj->agregar($datos);

?>