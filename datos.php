<?php
include 'conexion.php';

if (isset($_POST['medico'])) {
    $id = $_POST['medico'];

    $sql = "SELECT * FROM medico WHERE id_medico = $id";
    $query = mysqli_query($conet, $sql);

    while ($datos = mysqli_fetch_array($query)) {
        if ($id == $datos["id_medico"]) {
            $datos = array(
                'documento' => $datos["documento"],
                'nombre' => $datos["nombre"],
                'apellido' => $datos["apellido"],
                'especialidad' => $datos["especialidad"]
            );
            echo json_encode($datos);
        }
    }
}

if (isset($_POST['documento_user']) && isset($_POST['nombre_user']) && isset($_POST['apellido_user']) && isset($_POST['activo_user']) && isset($_POST['regimen_user'])) {
    $documento_user = $_POST['documento_user'];
    $nombre_user = $_POST['nombre_user'];
    $apellido_user = $_POST['apellido_user'];
    $activo_user = $_POST['activo_user'];
    $regimen_user = $_POST['regimen_user'];

    $sqlregistro = "INSERT INTO `paciente` (`documento`, `nombre`, `apellido`, `activo`, `regimen`) VALUES ('$documento_user', '$nombre_user', '$apellido_user', '$activo_user', '$regimen_user')";
    echo $queryregistro = mysqli_query($conet, $sql);
}

?>
