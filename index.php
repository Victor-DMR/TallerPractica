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

    <title>Registro De Usuario</title>
</head>

<body>
    <div class="row conten_row mt-3 mb-3">
        <div class="col-sm-10 col-md-4 border">
            <h4 class="text-center">Registro de paciente</h4>
            <form id="form" method="post">
                <div class="mb-2">
                    <label for="" class="form-label">Documento</label>
                    <input type="number" id="documento_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" id="nombre_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" id="apellido_user" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Activo</label>
                    <select id="activo_user" class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Regimen</label>
                    <select id="regimen_user" class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="contributivo">Contributivo</option>
                        <option value="subsidiado">Subsidiado</option>
                    </select>
                </div>
                <br>
                <hr>
                <div class="mb-2">
                    <label for="" class="form-label">Medico</label>
                    <select id="id_valor" name="medico" class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <?php
                        include "conexion.php";

                        $sql = "SELECT * FROM medico WHERE id_medico";
                        $query = mysqli_query($conet, $sql);

                        while ($datos = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?= $datos["id_medico"] ?>"><?= $datos["nombre"] ?> <?= $datos["apellido"] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Documento</label>
                    <input type="text" id="documento" name="documento" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" id="nombre" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" id="apellido" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Especialidad</label>
                    <input type="text" id="especialidad" class="form-control">
                </div>
                <br>
                <hr>
                <div class="mb-2">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Hora</label>
                    <input type="time" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Valor</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Atendida</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <button type="button" id="registrar" class="btn btn-primary mb-2 mt-2">Registrar</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#id_valor').on('change', function() {
                $.ajax({
                    url: 'datos.php',
                    type: 'post',
                    data: $('#form').serialize(),
                    success: function(data) {
                        var datos = JSON.parse(data);
                        $('#documento').val(datos.documento);
                        $('#nombre').val(datos.nombre);
                        $('#apellido').val(datos.apellido);
                        $('#especialidad').val(datos.especialidad);
                    }
                });

            });

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

                $.ajax({
                    url: 'datos.php',
                    type: 'post',
                    data: $('#form').serialize(),
                    success: function(data) {
                        alertify.alert("Registro Exitoso", "Su registro fue todo un exito");
                        header("lista.php");
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>