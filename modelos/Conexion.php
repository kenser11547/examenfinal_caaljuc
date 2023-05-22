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

        return self::$conexion;
    }

    public static function ejecutar($sql){
        /*conectarse a la BD, preparacion de la sentencia, ejecucion y devolucion de resultados */
        self::conectar();
        $sentencia = self::$conexion->prepare($sql);
        $resultado = $sentencia->execute();
        self::$conexion = null;
        return $resultado;
    }
    public static function servir($sql){
        /*conexion a la base de datos, preparacion, ejecucion, cierre devolucion de resultados*/
        self::conectar();
        $sentencia = self::$conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        self::$conexion = null;
        return $resultados;
    }
}