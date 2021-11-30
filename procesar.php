<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $fichero = 'pedidos.txt';
    // Abre el fichero para obtener el contenido existente
    $actual = file_get_contents($fichero);
    // Añade una nueva persona al fichero
    $actual .= $_POST['ingredientes']." ";
    $actual .= $_POST['salsa']." ";
    $actual .= $_POST['masa']." ";
    $actual .= $_POST['nombre']." ";
    $actual .= $_POST['direccion']."\n";
    // Escribe el contenido al fichero
    file_put_contents($fichero, $actual);
    $time = rand(10,40);
    echo ("<h1>Su pedido estara listo en $time minutos</h1>");
    ?>

    <a href="index.php">Salir</a>
  </body>
</html>