<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include_once './Complementos/Complementos.php';
    ?>
</head>
<body>
    <?php
    include_once './Complementos/Encabezado.php';
    ?>
    <div class="container">
        <Br>
        <Br>
        <h2>Insertar Nuevo Registro</h2>
        <Br>
            <form action="./Clases/Ejecuta.php" method="POST">
                <input name="opc" value="1" type="hidden">
            <div class="form-group">
              <label for="Nombre">Ingresa tu Nombre:</label>
              <input type="text" class="form-control" id="Nombre" placeholder="Ingresa tu Nombre" name="Nombre">
            </div>
            <div class="form-group">
              <label for="Edad">Ingresa tu Edad:</label>
              <input type="number" class="form-control" id="Edad" placeholder="Ingresa tu Edad" name="Edad">
            </div>
              <div class="form-group">
              <label for="Correo">Ingresa tu Correo:</label>
              <input type="email" class="form-control" id="Correo" placeholder="Ingresa tu Correo" name="Correo">
            </div>
            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
            <button type="reset" class="btn btn-lg">Borrar</button>
        </form>
       
            <br>    <br>
        <div class="row">
            <div class="col-md-12">
                <a href="./Mostrar.php" class="btn btn-success btn-block">Ir a Formulario de Mostrar todo</a>
            </div>
        </div>
    </div>    
    <section class="">
        <?php
        include_once './Complementos/Footer.php';
        ?>
    </section>
</body>
</html>