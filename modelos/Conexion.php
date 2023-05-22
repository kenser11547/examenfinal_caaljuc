<?php

abstract class Conexion{
    public static $conexion = null;

    private static function conectar(){
       try {
        /*CONEXION CON LA BASE DE DATOS*/
        self::$conexion =new PDO('informix:host=host.docker.internal; service=9088; database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix');
       /*DEFINIR LAS EXCEPCIONES*/
       self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            /*imprimir el la pantalla el error*/
            echo "Error de conexion a la Base de Datos";
            echo "<br>";
            echo $e->getMessage();
            exit;
        }
    }
}