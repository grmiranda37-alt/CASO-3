<?php
  
      $server = "localhost";
      $base   = "tienda";
      $usr    = "root";
      $pass   = "1234";

      $cnx = mysqli_connect($server, $usr, $pass, $base)
         or die ("Error en la conexion");

        $id_producto = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];

        mysqli_query($cnx, "UPDATE produc SET nom_prod='$nombre', precio='$precio', descripcion='$descripcion' WHERE id_producto ='$id'")
           or die ("Error en la actualizacion");  
        mysqli_close($cnx);
        
        echo "<h1 style='color:#3a5a40;'>¡Éxito! Registro actualizado</h1>";
        echo "<a href='lista.php'>Regresar</a>";
?>