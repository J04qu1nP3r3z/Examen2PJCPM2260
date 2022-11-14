<?php
require_once 'AutoLoad.php';

class Tareas extends conexion{
    private $table = "Datos";
    private $dbConn;
    private $Conn;
    public function __construct() {
        $this->dbConn = new conexion();
        $this->Conn = $this->dbConn->AbrirConexion();
    }

    public function Create(string $values, array $parametros){
        $query = "insert into $this->table values($values)";
        $sentencia = $this->Conn->prepare($query);
        $consulta = $sentencia->execute($parametros);
        $LAST_ID = $this->Conn->lastInsertId();
        return $LAST_ID;
    }
    
    public function Delete($id){
        $query = "DELETE FROM $this->table WHERE id=$id";
        $sentencia = $this->Conn->prepare($query);
        $sentencia->execute();
        $rowAfecct = $sentencia->rowCount();
        $mensaje="";
        if($rowAfecct>0){
                $mensaje = "Registro Eliminado Correctamente";
        }else{
                $mensaje = "Registro no Eliminado";
        }
        return $mensaje;
    }
    
    public function GetAll(){
        $query = "Select * FROM $this->table";
        $sentencia = $this->Conn->prepare($query);
        $sentencia->execute();
        $registro = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($registro);
    }
    public function GetID($id){
        $query = "select * FROM $this->table WHERE id=$id";
        $sentencia = $this->Conn->prepare($query);
        $sentencia->execute();
        $registro = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $dto = json_encode($registro[0]);
        return $dto;
        
    }
    
    public function SetIDParam($id, array $parametros){
        $query = "update $this->table set Nombre=?, Edad=?, Correo=? where id=$id";
        $sentencia = $this->Conn->prepare($query);
        $sentencia->execute($parametros);
        $rowAfecct = $sentencia->rowCount();
        $mensaje="";
        if($rowAfecct>0){
                $mensaje = "Registro Actualizado Correctamente";
        }else{
                $mensaje = "Registro no Eliminado";
        }
        return $mensaje;
    }
}