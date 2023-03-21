<?php 
    include 'conexion.php';

    if (isset($_POST['documento_user']) && isset($_POST['nombre_user']) && isset($_POST['apellido_user']) && isset($_POST['activo_user']) && isset($_POST['regimen_user'])) {
        $documento_user = $_POST['documento_user'];
        $nombre_user = $_POST['nombre_user'];
        $apellido_user = $_POST['apellido_user'];
        $activo_user = $_POST['activo_user'];
        $regimen_user = $_POST['regimen_user'];
    
        $sqlregistro = "INSERT INTO `paciente` (`id_paciente`, `documento`, `nombre`, `apellido`, `activo`, `regimen`) VALUES (NULL, '$documento_user', '$nombre_user', '$apellido_user', '$activo_user', '$regimen_user')";
        $queryregistro = mysqli_query($conet, $sqlregistro);

        header("location:lista.php");
    } 

    if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['valor']) && isset($_POST['atendiad']) && isset($_POST['regimen_user'])) {
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $valor = $_POST['valor'];
        $atendida = $_POST['atendida'];

        $sql = "INSERT INTO `cita` (`id_cita`, `fecha`, `hora`, `valor`, `atendida`, `id_paciente`, `id_medico`) VALUES (NULL, '20/03/2023', '12:48pm', '20000', 'si', '1', '1')";
        $query = mysqli_query($conet, $sql);
    }
?>