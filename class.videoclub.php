<?php
namespace VideoClub;
/**
*clase VideoClub clase padre de las demas clases
*/
class VideoClub{
    private $nombre;
    private $productos;
    private $clientes;


    public function __construct($nombre)
    {
        $this->nombre= $nombre;
        $this->productos=array();
        $this->clientes=array();
    }

    public function addProducto($producto)
    {
        $this->productos[]=$producto;
    }

    public function getProductos()
    {
        return $this->productos;
    }

    public function addCliente($cliente)
    {
        $this->clientes[]=$cliente;
    }

    public function getClientes()
    {
        return $this->clientes;
    }

    public function alquilar($cliente, $producto)
    {
        $cliente->alquilarProducto($producto);
    }

}
?>