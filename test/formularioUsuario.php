<html>
	<body>
		<h1>Gestión de Usuarios</h1>
		
		<?php if(isset($_SESSION['mensaje'])):?>
			<p><?=$_SESSION['mensaje'] ?></p>
		<?php endif; ?>
		
		<?php if(!empty($_SESSION['errores'])):?>
			<ul>
				<?php foreach($_SESSION['errores'] as $error): ?>
				<li><?php echo $error ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif;?>
		
		<p><a href="usuarios.php">Nuevo</a></p>
		<form method="post" action="usuarios.php">
			<input type="hidden" name="id" value="<?=isset($usuario['id'])? $usuario['id'] : ''?>">
			<input type="text" name="nombre" placeholder="Nombre" value="<?=isset($usuario['nombre'])? $usuario['nombre'] : ''?>" required>
			<input type="text" name="nombre_completo" placeholder="Nombre completo" value="<?=isset($usuario['nombre_completo'])? $usuario['nombre_completo'] : ''?>" required>
			<input type="email" name="email" placeholder="Email" value="<?=isset($usuario['email'])? $usuario['email'] : ''?>" required>
			<input type="text" name="telefono" placeholder="Teléfono" value="<?=isset($usuario['telefono'])? $usuario['telefono'] : ''?>" required>
			<input type="submit" value="Guardar">
		</form>
		
		<?php if(!empty($usuarios)):?>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>N. Completo</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Acción</th>
			</thead>
		<?php foreach($usuarios as $usuario): ?>
			<tbody>
				<td><?php echo $usuario['id'] ?></td>
				<td><?php echo $usuario['nombre'] ?></td>
				<td><?php echo $usuario['nombre_completo'] ?></td>
				<td><?php echo $usuario['email'] ?></td>
				<td><?php echo $usuario['telefono'] ?></td>
				<td><a href="usuarios.php?editar=<?php echo $usuario['id'] ?>">Editar</a> <a href="usuarios.php?borrar=<?php echo $usuario['id'] ?>">Borrar</a></td>
			</tbody>
		<?php endforeach; ?>
		</table>
		
		<?php else: ?>
			<p>No se han encontrado resultados</p>
		<?php endif;?>
	</body>
</html>