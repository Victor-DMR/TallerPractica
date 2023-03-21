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

?>
