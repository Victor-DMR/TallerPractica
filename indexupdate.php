<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilos de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- mis estilos -->
    <link rel="stylesheet" href="style.css">
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- alertify -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>

    <title>Update usuario</title>
</head>

<body>
    <div class="row conten_row mt-3 mb-3">
        <div class="col-sm-10 col-md-4 border">
            <h4 class="text-center">Update usuario</h4>
            <?php 
                include "conexion.php";

                $id = $_GET["id"];
                $sql = "SELECT * FROM paciente WHERE id_paciente = $id";
                $query = mysqli_query($conet, $sql);

                while ($datos = mysqli_fetch_array($query)) {
            ?>
            <form id="form" action="update.php" method="post">
                <input type="number" name="id_paciente" value="<?= $datos['id_paciente']?>" hidden>
                <div class="mb-2">
                    <label for="" class="form-label">Documento</label>
                    <input type="number" value="<?= $datos["documento"] ?>" name="documento_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" value="<?= $datos["nombre"] ?>" name="nombre_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" value="<?= $datos["apellido"] ?>" name="apellido_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Activo</label>
                    <select name="activo_user" class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Regimen</label>
                    <select name="regimen_user" class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="contributivo">Contributivo</option>
                        <option value="subsidiado">Subsidiado</option>
                    </select>
                </div>
                <?php
                    }
                ?>
                <button type="submit" id="registrar" class="btn btn-primary mb-2 mt-2">Update</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#registrar').click(function() {
                if ($('#documento_user').val() == "") {
                    alertify.alert("Alerta!","Debes agregar el documento de usuario");
                    return false;
                } else if ($('#nombre_user').val() == "") {
                    alertify.alert("Alerta!","Debes agregar el nombre de usuario");
                    return false;
                } else if ($('#apellido_user').val() == "") {
                    alertify.alert("Alerta!","Debes agregar el apellido de usuario");
                    return false;
                } else if ($('#activo_user').val() == "") {
                    alertify.alert("Alerta!","Debes agregar el estado activo de usuario");
                    return false;
                } else if ($('#regimen_user').val() == "") {
                    alertify.alert("Alerta!","Debes agregar el tipo de regimen de usuario");
                    return false;
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>