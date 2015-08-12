<?php
namespace VideoClub\Model;

/**
* clase que extiende de clase padre Producto 
*/
class Pelicula extends Producto

{
    use Genero;
    private $idioma;
    private $duracion;
    

    public function __construct ($nombre, $idioma, $duracion, $genero)
    {
        $this->nombre = $nombre;
        $this->precio = 2;
        $this->tipo = 'Pelicula';
        $this->idioma = $idioma;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getIdioma()
    {
        return $this->idioma;
    }

    public function getDuracion()
    {
       return $this->duracion;
    }
    
    
}
?>