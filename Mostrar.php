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
    ?>
    <div class="container">
        <Br>
        <Br>
        <h2>Registro en Base de Datos</h2>
        <Br>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Correo</th>
                <th colspan="2" style="text-align: center">Accion</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $Parametros = NULL;
                $values = "*";
                $condicion = NULL;
                $table = "Datos";
                $ejecutaTask = new Tareas();
                $datos1 = json_decode($ejecutaTask->GetAll());
                foreach ($datos1 as $dato){
                    echo "<tr>";
                    echo "<td>".$dato->id."</td>";
                    echo "<td>".$dato->Nombre."</td>";
                    echo "<td>".$dato->Edad."</td>";
                    echo "<td>".$dato->Correo."</td>";
                    echo "<td><a href='./Clases/Ejecuta.php?id=$dato->id&opc=2'>Elimina</a></td>";
                    echo "<td><a href='Actualizar.php?id=$dato->id'>Actualiza</a></td>";
                    echo "</tr>";
                }
                
                ?>
            </tbody>
        </table>
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