<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="row conten_row mt-3 mb-3">
        <div class="col-sm-10 col-md-4 border">
            <h4 class="text-center">Registro de paciente</h4>
            <form action="post">
                <div class="mb-2">
                    <label for="" class="form-label">Documento</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Activo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Regimen</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="contributivo">Contributivo</option>
                        <option value="subsidiado">Subsidiado</option>
                    </select>
                </div>
                <br>
                <hr>
                <div class="mb-2">
                    <label for="" class="form-label">Medico</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="jose Martinez">Jose Martiez</option>
                        <option value="fernando vergara">Fernando Vergara</option>
                        <option value="aida pineda">Aida Pineda</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Documento</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Apellido</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Especialidad</label>
                    <input type="text" class="form-control">
                </div>
                <br>
                <hr>
                <div class="mb-2">
                    <label for="" class="form-label">Fecha</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Hora</label>
                    <input type="text" class="form-control">
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
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>