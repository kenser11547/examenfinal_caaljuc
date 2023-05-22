<?php
require '../../modelos/insumos.php';

try {
    $producto = new Producto($_POST);
    $resultado = $producto->guardar();
    $error = "NO SE GUARDO LA INFORMACION DE MANERA CORRECTA";
} catch (PDOException $e){
    $error = $e->getMessage();    
} catch (Exception $e2){
    $error = $e2->getMessage();
}