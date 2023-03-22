<?php
    include "conexion.php";

    if (isset($_POST['id_paciente']) && isset($_POST['documento_user']) && isset($_POST['nombre_user']) && isset($_POST['apellido_user']) && isset($_POST['activo_user']) && isset($_POST['regimen_user'])) {

        $id_paciente = $_POST["id_paciente"];
        $documento_user = $_POST['documento_user'];
        $nombre_user = $_POST['nombre_user'];
        $apellido_user = $_POST['apellido_user'];
        $activo_user = $_POST['activo_user'];
        $regimen_user = $_POST['regimen_user'];


        $sql = "UPDATE `paciente` SET `documento` = '$documento_user', `nombre` = '$nombre_user', `apellido` = '$apellido_user', `activo` = '$activo_user', `regimen` = '$regimen_user' WHERE `paciente`.`id_paciente` = $id_paciente";
        $query = mysqli_query($conet, $sql);

        if ($query) {
            header("location:lista.php");
        }

    }else{
        echo "error";
    }
?>
