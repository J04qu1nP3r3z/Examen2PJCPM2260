<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    require_once './Clases/AutoLoad.php';
    include_once './Complementos/Complementos.php';
    ?>
</head>
<body>
    <?php
    include_once './Complementos/Encabezado.php';
    $id = $id = $_GET["id"];
    $MUestraRow = new Tareas();
    $Dtos = json_decode($MUestraRow->GetID($id));
    ?>
    <div class="container">
        <Br>
        <Br>
        <h2>Actualizar Registro en Base de Datos</h2>
        <Br>
            <form action="./Clases/Ejecuta.php" method="POST">
            <input name="opc" value="3" type="hidden">
            <input name="id" value="<?php echo $id; ?>" type="hidden">
            <div class="form-group">
              <label for="Nombre">Ingresa tu Nombre:</label>
              <input type="text" class="form-control" id="Nombre" placeholder="Ingresa tu Nombre" name="Nombre" value="<?php echo $Dtos->Nombre; ?>">
            </div>
            <div class="form-group">
              <label for="Edad">Ingresa tu Edad:</label>
              <input type="number" class="form-control" id="Edad" placeholder="Ingresa tu Edad" name="Edad" value="<?php echo $Dtos->Edad; ?>">
            </div>
              <div class="form-group">
              <label for="Correo">Ingresa tu Correo:</label>
              <input type="email" class="form-control" id="Correo" placeholder="Ingresa tu Correo" name="Correo" value="<?php echo $Dtos->Correo; ?>">
            </div>
            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
        </form>
        <br>    <br>
        <div class="row">
            <div class="col-md-12">
                <a href="./" class="btn btn-success btn-block">Ir a Formulario de Insertar Nuevo Registro</a>
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