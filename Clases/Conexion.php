<?php
class conexion{
    private $host="localhost";
    private $db="Examen2p";
    private $usr="JCPM2260";
    private $pwd="J04qu1nP3r3z";

    private $conecta;
    private $cadena;

    public function __construct(){   

        $this->cadena = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
               $this->conecta = new PDO($this->cadena, $this->usr, $this->pwd);
                $this->conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // new PDO("mysql:host=$this->host;dbname=$this->db",  $this->usr, $this->pwd, array(
                               //             PDO::ATTR_PERSISTENT => true
                               //         ));

        }catch(Excepcion $e){
                echo "Error de conexion...";
                echo "Error: ".$e->getMessage();
        }
    }

    public function AbrirConexion(){
        return $this->conecta;
    }
}