<?php
namespace VideoClub\Model;

//nombre de vedor, nombre de clase
/**
* clase abstracta extiende de clase Videoclub
* no puede crear objeto, sus hijas Cd, Juego, Pelicula
*/
abstract class Producto
{
    
    protected $nombre;
    protected $precio;
    protected $tipo;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    /**
    * función abstracta, tiene que impletarse si o si en las clases hijas
    */
    abstract public function getPrecio();
}
?>