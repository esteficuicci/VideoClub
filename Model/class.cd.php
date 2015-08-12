<?php
namespace VideoClub\Model;
/**
*Clase cd es una extension de la clase Producto
*/
class Cd extends Producto
{
    use Genero;
    private $duracion;

    /**
    * asigno a las variables un valor base
    */
    public function __construct($nombre, $duracion, $genero)
    {
        $this->nombre = $nombre;
        $this->precio = 1;
        $this->tipo = 'Cd';
        $this->genero = $genero;
        $this->duracion = $duracion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

}

?>