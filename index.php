<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1 class="titulo1">REGISTRATE CON NOSOTROS</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="agregarDatos.php" method="POST">
                        <div class="form-group">
                            <label for="nombreusuario">Nombre</label>
                            <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" aria-describedby="emailHelp">
                            <small id="nombre" class="form-text text-muted"></small>
                          </div>
                        <div class="form-group">
                          <label for="correousuario">Correo electronico</label>
                          <input type="email" class="form-control" id="correousuario" name="correousuario" aria-describedby="emailHelp">
                          <small id="email" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                          <label for="contrasenausuario">Contraseña de ususario</label>
                          <input type="password" class="form-control" id="contrasenausuario" name="contrasenausuario">
                        </div>
                        <button type="submit" class="btn btn-outline-primary" id="btnagregar" name="btnagregar">Agregar</button>
                      </form>
                      <hr>
                      <h2>CONSULTAR REGISTRO</h2>
                        <form action="consultarDatos.php" method="POST">
                         <div class="form-group">
                            <label for="consultasre">Usuarios por nombre</label>
                            <input type="text" class="form-control" id="consultasre" name="consultasre">
                        </div>
                        <button type="submit" class="btn btn-outline-success" name="btnbuscar">Buscar</button>
                        </form>
                        <hr>
                        <h2>ELIMINAR REGISTRO</h2>
                        <form action="eliminarDatos.php" method="POST">
                        <div class="form-group">
                            <label for="eliminarre">Usuarios por nombre</label>
                            <input type="text" class="form-control" id="eliminarre" name="eliminarre">
                        </div>
                        <button type="submit" class="btn btn-outline-danger" name="btneliminar">Eliminar</button>
                        </form>
                        <br>
                        <br>
                </div>
            </div>
        </div>

        
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>