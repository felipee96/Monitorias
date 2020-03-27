<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>REGISTRO MONITORES</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src='main.js'></script>
</head>
<body style=" background-color:#a8e6cf;margin-top:50px;">
    <form class="container" method="POST" action="claseUsuario.php" style="width: 50%;">
        <h1>REGISTRO DE MONITORES</h1>
        <div class="form-group">
            <label for="codigo">Codigo Estudiantil</label>
            <input type="text" class="form-control" id="codigo" placeholder="Ingrese codigo de estudiante" name="codigo">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido">
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
                <label for="sala">Sala en la que va a laborar</label>
                <select id="sala" class="form-control" name="sala">
                <option selected>Seleccionar--</option>
                <option>C4-11</option>
                <option>B2-208</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="horario">Horario en el que va a laborar</label>
                <select id="horario" class="form-control" name="horario">
                <option selected>Seleccionar--</option>
                <option>8:00 - 12:00</option>
                <option>14:00 - 18:00</option>
                <option>18:00 - 22:00</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    
</body>
</html>