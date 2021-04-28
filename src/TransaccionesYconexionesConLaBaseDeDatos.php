<?php

namespace App;

class TransaccionesYconexionesConLaBaseDeDatos {

    private array $datosDeConexion;
    
    public function __construct($datosDeConexion) {
        $this->datosDeConexion = $datosDeConexion;
    }

    public function agregarDatosDeConexion($datosDeConexion) {
        $this->datosDeConexion = $datosDeConexion;
    }

    public function obtenerDatosDeConexion() {
        return $this->datosDeConexion;
    }

    public function conectar() {

        $datosDeConexion = $this->obtenerDatosDeConexion();

        try {
            $conn = new \PDO("mysql:host=".$datosDeConexion['servername'].
            ";port=3306;".
            $datosDeConexion['databasename'], $datosDeConexion['username'], 
            $datosDeConexion['password']);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMDE_EXCEPTION);
            return "conexion exitosa";
        } catch(PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }

    }

}