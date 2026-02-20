<?php
require_once 'Producto.php';

class Carrito
{
    private $productos = [];
    private $total = 0;

    public function __construct()
    {
        $this->productos = [];
        $this->total = 0;
    }

    public function agregarProducto(Producto $producto)
    {
        $this->productos[] = $producto;
        $this->calcularTotal();
    }

    public function eliminarProducto($id)
    {
        foreach ($this->productos as $key => $producto) {
            if ($producto->getId() == $id) {
                unset($this->productos[$key]);
            }
        }
        $this->calcularTotal();
    }

    public function calcularTotal()
    {
        $this->total = 0;
        foreach ($this->productos as $producto) {
            $this->total += $producto->getPrecio();
        }
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getProductos()
    {
        return $this->productos;
    }
}
