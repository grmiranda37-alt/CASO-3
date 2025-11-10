<?php
	ini_set('display_errors', E_ALL);
	include "sql.php";
	
	$datos = seleccionar("SELECT * FROM produc", "localhost", "tienda", "root", "1234");
	
	//echo count($datos);
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Tabla de dato</title>
	<style>
		table tr:first-child th{
			background-color:#b0c4b1;
			color: white;
		}
		table tr td:first-child{
			background-color:#b0c4b1;
			color:white;
		}
		table tr td{
			background-color:#ffffff;
			color:#4a5759;
		}

	</style>
  </head>
  <body>
	<h1>Productos registrados</h1>
    <table border>
		<tr>
			
			<th>Id</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Descripción</th>
			<th>Acciones</th>
		    
		</tr>
		<?php foreach($datos as $dato):?>
		<tr>
			<td><?php echo $dato[0] ?></td>
			<td><?php echo $dato[1] ?></td>
			<td><?php echo $dato[2] ?></td>
			<td><?php echo $dato[3] ?></td>
			<td><a href='<?php echo "actualizar2.php?id=".$dato[0] ?>'>Actualizar</a></td
		</tr>
		<?php endforeach?>
    </table>
	<hr>
	<h1>Nuevo producto</h1>
	<form method="POST" action="agregar2.php">
		<label>Nombre: </label></br>
		<input name="nombre" required><br>
		<label>Precio: </label></br>
		<input name="precio" required type="Number"><br>
		<label>Descripción: </label></br>
		<input name="descripcion"><br>
		<br><input type="submit" value="AGREGAR"></br>
	</form>
	<hr>
	<h1>Eliminar producto</h1>
	<form method="GET" action="eliminar2.php">
	    <label>Nombre: </label></br>
		<input name="nombre" required><br>
		<label>Precio: </label></br>
		<input name="precio" required type="Number"><br>
		<label>Descripción: </label></br>
		<input name="descripcion"><br>
	<br><input type="submit" value="ELIMINAR"></br>
	</form>
	<hr>
	<h1>Actualizar producto</h1>
	<form method="POST" action="actualizar2.php">
		<label>Id: </label></br>
		<input name="id" required type="Number"><br>
		<label>Nombre: </label></br>
		<input name="nombre" required><br>
		<label>Precio: </label></br>
		<input name="precio" required type="Number"><br>
		<label>Descripción: </label></br>
		<input name="descripcion"><br>
		<br><input type="submit" value="ACTUALIZAR"></form></br>
    </form>
  </body>
</html>