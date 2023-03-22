<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="row conten_row mt-3 mb-3">
        <div class="col-sm-12 col-md-11">
            <h3>Lista de paciente</h3> 
            <a href="index.php"><button class="btn btn-success">Nuevo</button></a>
            <a href="index.php"><button class="btn btn-primary">Regresar</button></a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Regimen</th>
                        <th scope="col">Cita</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include "conexion.php";

                $sql = "SELECT * FROM paciente WHERE id_paciente";
                $query = mysqli_query($conet, $sql);

                while ($datos = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <tr>
                            <th><?= $datos["documento"] ?></th>
                            <td><?= $datos["nombre"] ?></td>
                            <td><?= $datos["apellido"] ?></td>
                            <td><?= $datos["activo"] ?></td>
                            <td><?= $datos["regimen"] ?></td>
                            <td><a href="lista_cita.php?id='<?= $datos['id_paciente'] ?>'"><button class="btn btn-primary">ver</button></a></td>
                            <td><a href="delate.php?id='<?= $datos['id_paciente']?>'"><button class="btn btn-danger">delate</button></a> <a href="indexupdate.php?id='<?= $datos['id_paciente']?>'"><button class="btn btn-success">update</button></a></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>