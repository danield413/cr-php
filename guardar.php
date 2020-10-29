<?php

$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$produccion = $_POST['produccion'];
$guion = $_POST['guion'];
$musica = $_POST['musica'];
$fotografia = $_POST['fotografia'];
$montaje = $_POST['montaje'];
$protagonistas = $_POST['protagonistas'];
$pais = $_POST['pais'];
$anio = $_POST['anio'];
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$idiomas = $_POST['idiomas'];
$productora = $_POST['productora'];
$distribucion = $_POST['distribucion'];
$presupuesto = $_POST['presupuesto'];
$recaudacion = $_POST['recaudacion'];
$sinopsis = $_POST['sinopsis'];


$host = 'localhost';
$database = 'peliapp-basedatos';
$username = 'root';
$password = '';


$conexion = mysqli_connect($host, $username, $password, $database);

if (!$conexion) {
      die("Conexion fallida :c " . mysqli_connect_error());
} 
 
$sql = "INSERT INTO `pelicula` (`id`, `titulo`, `direccion`, `produccion`, `guion`, `musica`, `fotografia`, `montaje`, `protagonistas`, `pais`, `anio`, `genero`, `duracion`, `idiomas`, `productora`, `distribucion`, `presupuesto`, `recaudacion`, `sinopsis`) VALUES (NULL, '$titulo', '$direccion', '$produccion', '$guion', '$musica', '$fotografia', '$montaje', '$protagonistas', '$pais', '$anio', '$genero', '$duracion', '$idiomas', '$productora', '$distribucion', '$presupuesto', '$recaudacion', '$sinopsis');";
if (mysqli_query($conexion, $sql)) {
      header("Location: http://localhost/PeliApp/listar.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


?>