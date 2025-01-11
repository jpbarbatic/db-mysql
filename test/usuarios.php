<?php
include "config.php";
include "../src/db_mysql.php";

$conn=db_open();
$usuarios=db_query($conn, "SELECT * FROM usuarios");
db_close($conn);
?>

<table border="1">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>N. Completo</th>
		<th>Email</th>
		<th>Teléfono</th>
	</thead>
<?php foreach($usuarios as $usuario): ?>
	<tbody>
		<td><?php echo $usuario['id'] ?></td>
		<td><?php echo $usuario['nombre'] ?></td>
		<td><?php echo $usuario['nombre_completo'] ?></td>
		<td><?php echo $usuario['email'] ?></td>
		<td><?php echo $usuario['telefono'] ?></td>
	</tbody>
<?php endforeach; ?>
</table>