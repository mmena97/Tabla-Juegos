<?php

    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj= new crud();

    $datos=array(
        $_POST['tituloU'],
        $_POST['fechaU'],
        $_POST['notaU'],
        $_POST['inU'],
        $_POST['gaU'],
        $_POST['meU'],
        $_POST['hiU'],
        $_POST['peU'],
        $_POST['muU'],
        $_POST['duU'],
        $_POST['grU'],
        $_POST['diU'],
        $_POST['soU'],
        $_POST['traduccionU'],
        $_POST['dificultadU'],
        $_POST['idjuego']
    );

    echo $obj->actualizar($datos);

?>