<h2>Gestión de productos</h2>
<a class="btn btn-primary" href="productos.php">Nuevo</a>
<form action="productos.php" method="post">
	<input class="form-control" type="text" name="id" placeholder="ID" value="<?php echo isset($producto) ? $producto['id'] : '' ?>" readonly>
	<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($producto) ? $producto['nombre'] : '' ?>" required>
	<input class="form-control" type="text" name="precio" placeholder="Precio" value="<?php echo isset($producto) ? $producto['precio'] : '' ?>" required>
	<input class="form-control" type="text" name="cantidad" placeholder="Cantidad" value="<?php echo isset($producto) ? $producto['cantidad'] : '' ?>" required>
	<input class="form-control" type="text" name="codigo_barras" placeholder="C. Barras" value="<?php echo isset($producto) ? $producto['codigo_barras'] : '' ?>" required>
	<input class="btn btn-success" type="submit" value="Guardar">
</form>
<?php if (isset($producto)): ?>
	<img src="barcode.php?f=svg&s=ean-13-nopad&d=<?= $producto['codigo_barras'] ?>">
<?php endif; ?>
<table class="table">
	<tr>
		<th class="text-end">ID</th>
		<th>Nombre</th>
		<th class="text-end">Precio</th>
		<th class="text-end">Cantidad</th>
		<th class="text-center">C. Barras</th>
		<th class="text-center">Acciones</th>
	</tr>

	<?php foreach ($productos as $producto): ?>
		<tr>
			<td class="text-end"><?= $producto['id'] ?></td>
			<td><?= $producto['nombre'] ?></td>
			<td class="text-end"><?= $producto['precio'] ?> &euro;</td>
			<td class="text-end"><?= $producto['cantidad'] ?></td>
			<td class="text-center"><?= $producto['codigo_barras'] ?></td>
			<td class="text-center"><a href="productos.php?editar=<?= $producto['id'] ?>">Editar</a> <a href="productos.php?borrar=<?= $producto['id'] ?>">Borrar</a></td>
		</tr>
	<?php endforeach; ?>
</table>