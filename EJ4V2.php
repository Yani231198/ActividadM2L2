<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>EJ4 V2</title>
  </head>
  <body>
  <div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3>Ejercicio 4 V2</h3>
            <hr>
            <br>
            <?php 
                $enlace = "aqui";
                $mensaje = "";
                
                if ($enlace != "aqui") 
                {
                    $mensaje = "¡Cuidado, estas fastidiando un enlace a una pagina!";
                } 
                else 
                {
                    $mensaje = "¡Bien! Estas haciendo un favor al mundo del SEO";
                }

                echo $mensaje;
            ?>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>