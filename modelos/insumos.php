<?php
require 'Conexion.php';

class Producto extends Conexion{
    public $id_insumo;
    public $nombre;
    public $marca_producto;
    public $cantidad_existencia;
    public $marca;
    public $nombre_proveedor;
    public $precio;
 
    public function __construct($args = [] )
    {
        $this->id_insumo = $args['id_insumo'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->marca_producto = $args['marca_producto'] ?? '';
        $this->cantidad_existencia = $args['cantidad_existencia'] ?? '';
        $this->marca = $args['marca'] ?? '';
        $this->nombre_proveedor = $args['nombre_proveedor'] ?? '';
        $this->precio = $args['precio'] ?? '';

            }

}