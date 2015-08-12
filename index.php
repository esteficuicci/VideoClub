<?php
namespace VideoClub;

    include_once('Model/trait.genero.php');
    include_once ('class.videoclub.php');
    include_once ('generator.php');
    include_once('class.cliente.php');
    include_once('Model/class.producto.php');
    include_once('Model/class.pelicula.php');
    include_once('Model/class.cd.php');
    include_once('Model/class.juego.php');
    use VideoClub\Model\Juego;
    use VideoClub\Model\Pelicula;
    use VideoClub\Model\Cd;

    //Creo un objeto de la clase videoclub
    $videoclub= new VideoClub('VideoMax');

    //Creo un objeto de la clase cliente
    $cliente1=new Cliente ('Francisco');
    $cliente2=new Cliente ('Pepe');
    $cliente3=new Cliente ('Jose');
    $cliente4=new Cliente ('Micho');
    $cliente5=new Cliente ('Tito');

    /*
     * Este es un nuevo comentario
     */

    //Creamos una pelicula
    $pelicula= new Pelicula ('El anillos', 'Castellano', '3 horas', 'Fantasia');
    $pelicula2= new Pelicula ('El Guardaespaldas', 'Ingles', '2 horas', 'Drama');
    $pelicula3= new Pelicula ('Diario de una pasion', 'Ingles', '2 horas', 'Romantica');
    $pelicula4= new Pelicula ('911', 'Ingles', '2 horas', 'Policial');
    $cd= new Cd ('Azul', '58 min', 'rock nacional');
    $juego = new Juego ('Sims','Play3','interactivo');

    
    $videoclub->addCliente($cliente1);
    $videoclub->addCliente($cliente2);
    $videoclub->addCliente($cliente3);
    $videoclub->addCliente($cliente4);
    $videoclub->addCliente($cliente5);
    $videoclub->addProducto($pelicula);
    $videoclub->addProducto($cd);
    $videoclub->addProducto($juego);

    //El cliente alquila la pelicula
    $videoclub->alquilar($cliente1, $pelicula);
    $videoclub->alquilar($cliente1, $pelicula2);
    $videoclub->alquilar($cliente2, $pelicula4);
    $videoclub->alquilar($cliente3, $juego);

    $videoclub->alquilar($cliente4, $juego);

    //Obtenemos la lista de clientes registrados
    $clientes = $videoclub->getClientes();



    //Imprimimos la lista de clientes registrados
    echo '<p> Lista de clientes:</p>';
    
    foreach($clientes as $cliente)
    {   
        echo $cliente->getNombre().'<br />';
    }

    //Obtenemos la lista de productos registrados
    $productos = $videoclub->getProductos();
    echo '<p>Lista de productos:</p>';
    foreach ($productos as $producto)
    {
        echo $producto->getNombre().'<br />';
        echo $producto->getGenero().'<br/>';
    }

    //Obtenemos la lista de productos alquilados
    //traigo el array de los productos alquilados

    echo '<p>Lista de alquileres:</p>';

    echo '<table border="1">';
    echo '<tr><td>Cliente</td><td>Tipo de Producto</td><td>Nombre del Producto</td></tr>';
   /* foreach($clientes as $cliente)
    {
*/
        $alquileres = $cliente1->getProductosAlquilados();
        foreach (getProductosAlquiladosxCliente($alquileres) as $tipo => $nombre) {
            echo '<tr><td>';
            echo $cliente1->getNombre().'</td><td>'.$tipo . '</td><td>' . $nombre . '</td></tr>';
        }
    //}
    echo '</table>';
    echo 'hola';
    /*foreach ($alquileres as $prodAlquilado)
    {
        echo 'Tipo de producto: ' . $prodAlquilado->getTipo() .'<br/>';
        echo 'Nombre del producto: ' . $prodAlquilado->getNombre() .'<br/><br/>';
    }*/

