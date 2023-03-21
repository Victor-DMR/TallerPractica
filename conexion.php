<?php 
	$servidor = "localhost";
    $usuario = "root";
    $password = "";
    $basedatos = "tallerdiseño";

    $conet = new mysqli($servidor, $usuario, $password, $basedatos);
    $conet->set_charset("utf8");

    if ($conet->connect_errno) {
        die("Error al coneectar a la base de datos ".$conet->connect_errno);
    }
 ?>