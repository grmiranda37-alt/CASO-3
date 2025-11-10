<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "sql.php";

if (isset($_GET["nombre"]) && isset($_GET["precio"])) {
    //Eliminar producto
    $nombre = $_GET["nombre"];
    $precio = $_GET["precio"];
    $descripcion = $_GET["descripcion"];

      $server = "localhost";
      $base   = "tienda";
      $usr    = "root";
      $pass   = "1234";

    $querote = "DELETE from produc WHERE (nom_prod, precio, descripcion) = ('$nombre', '$precio', '$descripcion')";


    $res = delete($querote, $server, $base, $usr, $pass);
 

    if ($res > 0) {
        echo "<h1 style='color:#3a5a40;'>¡Éxito! Registro eliminado</h1>";
    } else {
        echo "<h1 style='color:#588157;'>Operación inválida</h1>";
    }

} else {
    echo "<h1 style='color:#588157;'>Operación inválida</h1>";
}

echo "<a href='lista.php'>Regresar</a>";
?>