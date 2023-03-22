<?php 
    include 'conexion.php';

    if (isset($_POST['documento_user']) && isset($_POST['nombre_user']) && isset($_POST['apellido_user']) && isset($_POST['activo_user']) && isset($_POST['regimen_user']) && isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['valor']) && isset($_POST['atendida']) && isset($_POST['regimen_user'])) {
        $documento_user = $_POST['documento_user'];
        $nombre_user = $_POST['nombre_user'];
        $apellido_user = $_POST['apellido_user'];
        $activo_user = $_POST['activo_user'];
        $regimen_user = $_POST['regimen_user'];

        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $valor = $_POST['valor'];
        $atendida = $_POST['atendida'];
        $medico = $_POST['medico'];
    
        $sqlregistro = "INSERT INTO `paciente` (`id_paciente`, `documento`, `nombre`, `apellido`, `activo`, `regimen`) VALUES (NULL, '$documento_user', '$nombre_user', '$apellido_user', '$activo_user', '$regimen_user')";
        $queryregistro = mysqli_query($conet, $sqlregistro);
   

        $sql_user = "SELECT * FROM paciente WHERE documento = $documento_user";
        $consulta = mysqli_query($conet, $sql_user);

        while ($dato = mysqli_fetch_array($consulta)){
            if ($documento_user == $dato["documento"]) {
                $bd_id = $dato["id_paciente"];
            }
        }


        $sql = "INSERT INTO `cita` (`id_cita`, `fecha`, `hora`, `valor`, `atendida`, `id_paciente`, `id_medico`) VALUES (NULL, '$fecha', '$hora', '$valor', '$atendida', '$bd_id', '$medico')";
        $query = mysqli_query($conet, $sql);

        header("location:lista.php");
    }else{
        echo "Hubo un error";
        header("location:index.php");
    }
?>