<html>
	<head>
		<title>Gestión de usuarios</title>
		<style>
			th{
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<h1>Gestión de usuarios</h1>
		<form action="users.php" method="post">
			<input type="text" name="id" placeholder="ID" value="<?php echo isset($usuario)? $usuario['id']:'' ?>" readonly>
			<input type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($usuario)? $usuario['nombre']:'' ?>" required>
			<input type="text" name="nombre_completo" placeholder="N. Completo" value="<?php echo isset($usuario)? $usuario['nombre_completo']:'' ?>" required>
			<input type="text" name="email" placeholder="Email" value="<?php echo isset($usuario)? $usuario['email']:'' ?>" required>
			<input type="text" name="telefono" placeholder="Teléfono" value="<?php echo isset($usuario)? $usuario['telefono']:'' ?>" required>
			<input type="text" name="password" placeholder="Password" value="<?php echo isset($usuario)? $usuario['password']:'' ?>" required>			
			<input type="submit" value="Guardar">
		</form>
		<table border="1">
		<tr>	
			<th>ID</th>
			<th>Nombre</th>
			<th>N. Completo</th>
			<th>Email</th>
			<th>Teléfono</th>
			<th>Password</th>
			<th>Acciones</th>			
		</tr>
		
		<?php foreach($usuarios as $usuario): ?>
		<tr>	
			<td><?=$usuario['id']?></td>
			<td><?=$usuario['nombre']?></td>
			<td><?=$usuario['nombre_completo']?></td>
			<td><?=$usuario['email']?></td>
			<td><?=$usuario['telefono']?></td>
			<td><?=$usuario['password']?></td>
			<td><a href="users.php?editar=<?=$usuario['id']?>">Editar</a> <a href="users.php?borrar=<?=$usuario['id']?>">Borrar</a></td>
		</tr>		
		<?php endforeach; ?>
		</table>
	</body>
</html>