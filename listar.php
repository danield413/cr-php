<?php

$host = 'localhost';
$database = 'peliapp-basedatos';
$username = 'root';
$password = '';

$conexion = mysqli_connect($host, $username, $password, $database);

if (!$conexion) {
      die("Conexion fallida :c " . mysqli_connect_error());
} 

$sql = "SELECT * FROM `pelicula`";
if (mysqli_query($conexion, $sql)) {
      $sql = "SELECT * FROM `pelicula`";
      $sentencia = mysqli_query($conexion, $sql);
    if(!$sentencia){
        echo 'Error en la sentencia' .mysqli_error();
    }
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeliApp - Listar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div>
        <h1 class="text-center my-2">Listado de Peliculas Salomé Villa <a class="btn btn-success" href="http://localhost/PeliApp">Ingresar una nueva pelicula</a></h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Produccion</th>
                <th scope="col">Guion</th>
                <th scope="col">Musica</th>
                <th scope="col">Fotografia</th>
                <th scope="col">Montaje</th>
                <th scope="col">Protagonistas</th>
                <th scope="col">Pais</th>
                <th scope="col">Año</th>
                <th scope="col">Genero</th>
                <th scope="col">Duracion</th>
                <th scope="col">Idiomas</th>
                <th scope="col">Productora</th>
                <th scope="col">Distribucion</th>
                <th scope="col">Presupuesto</th>
                <th scope="col">Recaudacion</th>
                <th scope="col">Sinopsis</th>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($sentencia)) {                              
                        echo"<tr>";
                          echo"<td>".$row['id']."</td>";
                          echo"<td>".$row['titulo']."</td>";
                          echo"<td>".$row['direccion']."</td>";
                          echo"<td>".$row['produccion']."</td>";
                          echo"<td>".$row['guion']."</td>";
                          echo"<td>".$row['musica']."</td>";
                          echo"<td>".$row['fotografia']."</td>";
                          echo"<td>".$row['montaje']."</td>";
                          echo"<td>".$row['protagonistas']."</td>";
                          echo"<td>".$row['pais']."</td>";
                          echo"<td>".$row['anio']."</td>";
                          echo"<td>".$row['genero']."</td>";
                          echo"<td>".$row['duracion']."</td>";
                          echo"<td>".$row['idiomas']."</td>";
                          echo"<td>".$row['productora']."</td>";
                          echo"<td>".$row['distribucion']."</td>";
                          echo"<td>".$row['presupuesto']."</td>";
                          echo"<td>".$row['recaudacion']."</td>";
                          echo"<td>".$row['sinopsis']."</td>";
                          echo"<td></td>";
                        echo"</tr>";
                      }



                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>