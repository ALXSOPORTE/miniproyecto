<?php 
    $host="localhost";
    $db="sitio";
    $usuario="root";
    $contrasenia="";

    try {
        $conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
        if ($conexion) {
/*             echo "Conectado al sistema"; */
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>