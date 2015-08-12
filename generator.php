<?php
namespace VideoClub;
include_once('Model/class.producto.php');
include_once('Model/class.pelicula.php');
include_once('Model/class.cd.php');
include_once('Model/class.juego.php');
use VideoClub\Model\Juego;
use VideoClub\Model\Pelicula;
use VideoClub\Model\Cd;

/**
 * @param array $alquileres
 * @return \Generator
 */
function getProductosAlquiladosxCliente(array $alquileres)
{

    $i = 0;
    $alquiCount = count($alquileres);

    while ($i < $alquiCount) {

        yield $alquileres[$i]->getTipo() => $alquileres[$i]->getNombre();

        $i++;
    }

}
/**
 * Created by PhpStorm.
 * User: ecuicci
 * Date: 10/08/2015
 * Time: 04:42 PM
 */
