<?php
require_once './AutoLoad.php';
echo $opcionTarea = $_REQUEST['opc'];
echo ", opcion ejecutada<br><br>";
$ejecutaTask = new Tareas();
if($opcionTarea==1){//ejemplo de Insercion de datos
    $Nombre = $_POST["Nombre"];
    $Edad = $_POST["Edad"];
    $Correo = $_POST["Correo"];
    $Parametros = [0,$Nombre,$Edad,$Correo];
    $values = "?,?,?,?";
    echo "Registro creado con id: ";
    echo $ejecutaTask->Create($values, $Parametros);
    header("refresh:5;url=../");
}else if($opcionTarea==2){//ejemplo de Eliminacion por ID
    $id = $_GET["id"];
    echo $ejecutaTask->Delete($id);
    header("refresh:5;url=../Mostrar.php");
}else if($opcionTarea==3){//ejemplo de Actualizacion
    $Nombre= $_POST["Nombre"];
    $Edad= $_POST["Edad"];
    $Correo= $_POST["Correo"];
    $id = $_POST["id"];
    $Parametros = [$Nombre,$Edad,$Correo];
    echo $ejecutaTask->SetIDParam($id, $Parametros);
    header("refresh:5;url=../Mostrar.php");
}

