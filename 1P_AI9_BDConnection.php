<?php
include_once('1P_AI9_BDConfig.php');

class BDConnection{

    public $conexion;
    function __construct(){

        try {

            $dsn = 'mysql:dbname='.BDConfig::$BDNAME. ';host='.BDConfig::$BDSERVER;
            $usuario = BDConfig::$BDUSER;
            $password = BDConfig::$BDPASSWORD;
            $this->conexion = new PDO($dsn, $usuario, $password);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
            exit;
        }

    }
    function cierraConexion(){
        $this->conexion = null;
    }
}