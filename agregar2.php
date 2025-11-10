<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "sql.php";

if (isset($_POST["nombre"]) && isset($_POST["precio"])) {
    //Insertar nuevo producto
    $nombre = $_POST["nombre"];

    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $server = "localhost";
    $base   = "tienda";
    $usr    = "root";
    $pass   = "1234";
    $querote = "INSERT INTO produc (nom_prod, precio, descripcion) VALUES ('$nombre', '$precio', '$descripcion')";

    $id = insertar($querote, $server, $base, $usr, $pass);

    if ($id != 0) {
        echo "<h1 style='color:#3a5a40;'>¡Éxito! Registro agregado</h1>";
    } else {
        echo "<h1 style='color:#588157;'>Operación inválida</h1>";
    }

} else {
    echo "<h1 style='color:#588157;'>Operación inválida</h1>";
}

echo "<a href='lista.php'>Regresar</a>";
?>
