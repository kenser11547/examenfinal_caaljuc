<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $id_insumo;
    public $nombre;
    public $cantidad_existencia;
    public $marca_producto;
    public $nombre_proveedor;
    public $precio;
 
    public function __construct($args = [] )
    {
        $this->id_insumo = $args['id_insumo'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->cantidad_existencia = $args['cantidad_existencia'] ?? '';
        $this->marca_producto = $args['marca_producto'] ?? '';
        $this->nombre_proveedor = $args['nombre_proveedor'] ?? '';
        $this->precio = $args['precio'] ?? '';

    }
    public function guardar(){
        $sql = "INSERT INTO insumos(nombre,cantidad_existencia, marca_producto, nombre_proveedor, precio) values('$this->nombre','$this->cantidad_existencia','$this->marca_producto','$this->nombre_proveedor','$this->precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}