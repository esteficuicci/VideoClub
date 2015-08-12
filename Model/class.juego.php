<?php
namespace VideoClub\Model;
/**
* Clase juego es una extension (hija) de la clase producto
*/
class Juego extends Producto
{
    use Genero;
    private $plataforma;

    public function __construct($nombre, $plataforma, $genero)
    {
        $this->nombre = $nombre;
        $this->plataforma = $plataforma;
        $this->tipo = 'Juego';
        $this->genero = $genero;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPlataforma()
    {
        return $this->plataforma;
    }

}

?>