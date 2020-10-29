<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeliApp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mb-5 mt-3">
        <div class="header bg-dark py-3">
            <h2 class="text-center text-white">Recolector de Peliculas Salomé Villa</h2>
        </div>

        <div class="row my-3">
            <div class="col-3">
            </div>
            <div class="col-6">
                <form action="./guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="titulo" autoComplete="off" placeholder="titulo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="direccion" autoComplete="off" placeholder="direccion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="produccion" autoComplete="off" placeholder="produccion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="guion" autoComplete="off" placeholder="guion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="musica" autoComplete="off" placeholder="musica">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fotografia" autoComplete="off" placeholder="fotografia">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="montaje" autoComplete="off" placeholder="montaje">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="protagonistas" autoComplete="off" placeholder="protagonistas">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pais" autoComplete="off" placeholder="pais">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="anio" autoComplete="off" placeholder="año">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="genero" autoComplete="off" placeholder="genero">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="duracion" autoComplete="off" placeholder="duracion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="idiomas" autoComplete="off" placeholder="idiomas">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="productora" autoComplete="off" placeholder="productora">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="distribucion" autoComplete="off" placeholder="distribucion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="presupuesto" autoComplete="off" placeholder="presupuesto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="recaudacion" autoComplete="off" placeholder="recaudacion">
                    </div>
                    <textarea class="form-control" name="sinopsis" rows="3" placeholder="sinopsis"></textarea>
                    
                    <button type="submit" class="btn btn-primary mt-5 btn-block">Guardar</button>
                </form>
            </div>
            <div class="col-3">
            </div>
        </div>

    </div>



</body>
</html>