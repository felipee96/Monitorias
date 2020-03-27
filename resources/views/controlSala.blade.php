<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CONTROL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src='main.js'></script>
</head>
<body style=" background-color:#deddfa;margin-top:50px;">
    <form class="container" method="POST" action="claseControl.php" style="width: 50%;">
        <h1>CONTROL DE MONITORIAS</h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codigo">Codigo del monitor</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese codigo del monitor" name="codigo">
            </div>
            <div class="form-group col-md-6">
                <label for="computador">Computador</label>
                <input type="text" class="form-control" id="computador" placeholder="Ingrese el computador" name="computador">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codigoEstu">Codigo del estudiante</label>
                <input type="text" class="form-control" id="codigoEstu" placeholder="Ingrese el codigo del estudiante" name="codigoEstu">
            </div>
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="facultad">Facultad</label>
                <select id="facultad" class="form-control" name="facultad">
                <option selected>Seleccionar--</option>
                <option>SISTEMAS</option>
                <option>MECATRONICA</option>
                <option>INDUSTRIAL</option>
                <option>AMBIENTAL</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="semestre">Semestre</label>
                <select id="semestre" class="form-control" name="semestre">
                <option selected>Seleccionar--</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="horai">Hora de ingreso</label>
                <input type="time" class="form-control" id="horai" placeholder="Ingrese hora" name="horai">
            </div>
            <div class="form-group col-md-6">
                <label for="horas">Hora de salida</label>
                <input type="time" class="form-control" id="horas" placeholder="Nombre" name="horas">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    
</body>
</html>