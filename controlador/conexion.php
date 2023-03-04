<?php

class conexion{
# DATOS DE CONEXIÓN
private $servername = "localhost";
private $username   = "root";
private $password   = "";
private $dbname     = "prueba";
private $conexion;

# PROCESO DE CONEXIÓN SEGÚN TIPO


function ConexionPHPDataObject() {
try {
    $this->conexion = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    // configura el manejo de errores a excepciones
    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    Echo "<br>Conexión exitosa.<br>";
    return $this->conexion;
} 
catch(PDOException $e) {
    echo "<br>Conexión fallida: " . $e->getMessage();
} 
}

function CerrarConexionPDO(){
$this->conexion = null;
echo "<br>Conexion Cerrada";
}

}


# PRUEBAS

//$conexion = ConexionPHPDataObjectDB($servername,$username,$password, $dbname);
//CerrarConexionPDO($conexion);

?>