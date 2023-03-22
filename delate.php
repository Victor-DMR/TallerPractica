<?php
    include "conexion.php"; 

    $valorid = $_GET["id"];

    $sql = "DELETE FROM paciente WHERE `paciente`.`id_paciente` = $valorid";
    
    $query = mysqli_query($conet, $sql);

    if ($query) {
        header("location:lista.php");
    }
?>