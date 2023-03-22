<?php 
    include "conexion.php"; 

    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Datos de la cita</title>

    <style>
        .tabla {
            display: flex;
            flex-direction: column;
            border-collapse: collapse;
            width: 100%;
            max-width: 500px;
        }

        .tabla tr {
            display: flex;
            flex-direction: row;
            border-bottom: 1px solid #ddd;
        }

        .tabla th,
        .tabla td {
            flex: 1;
            padding: 8px;
            text-align: left;
        }

        .tabla th {
            background-color: #f2f2f2;
        }
    </style>

</head>

<body>
    <div class="row conten_row mt-3 mb-3">
        <div class="col-sm-12 col-md-11">
            <h3>Datos de la cita</h3>
            <a href="lista.php"><button class="btn btn-primary mt-3 mb-3">Regresar</button></a>
            <?php
            $sqlcita = "SELECT * FROM cita WHERE id_paciente = $id";
            $querycita = mysqli_query($conet, $sqlcita);
        
            while ($datos_cita = mysqli_fetch_array($querycita)) {
                $id_medico = $datos_cita["id_medico"];
            }

            $sql_medico = "SELECT * FROM medico WHERE id_medico =$id_medico";
            $query_medico = mysqli_query($conet, $sql_medico);

            while ($datos_medico = mysqli_fetch_array($query_medico)) {
            ?>
                <table class="tabla">
                    <h3>Datos del mdico</h3>
                    <tr>
                        <th>Documento</th>
                        <td><?= $datos_medico["documento"] ?></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><?= $datos_medico["nombre"] ?></td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td><?= $datos_medico["apellido"] ?></td>
                    </tr>
                    <tr>
                        <th>Especialidad</th>
                        <td><?= $datos_medico["especialidad"] ?></td>
                    </tr>
                </table>
            <?php
            }
            ?>
            <br>
            <?php
            $sql_cita = "SELECT * FROM cita WHERE id_paciente = $id";
            $query_cita = mysqli_query($conet, $sql_cita);

            while ($datos_cita = mysqli_fetch_array($query_cita)) {
            ?>
                <table class="tabla">
                    <h3>Datos de la cita</h3>
                    <tr>
                        <th>Fecha</th>
                        <td><?= $datos_cita["fecha"] ?></td>
                    </tr>
                    <tr>
                        <th>Hora</th>
                        <td><?= $datos_cita["hora"] ?></td>
                    </tr>
                    <tr>
                        <th>Valor</th>
                        <td><?= $datos_cita["valor"] ?></td>
                    </tr>
                    <tr>
                        <th>Atendida</th>
                        <td><?= $datos_cita["atendida"] ?></td>
                    </tr>
                </table>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>