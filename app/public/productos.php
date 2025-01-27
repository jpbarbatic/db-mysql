<?php
require('comun.inc.php');

$conn = db_open();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$producto['id'] = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
	$producto['nombre'] = $_REQUEST['nombre'];
	$producto['cantidad'] = $_REQUEST['cantidad'];
	$producto['codigo_barras'] = $_REQUEST['codigo_barras'];
	$producto['categoria_id'] = $_REQUEST['categoria_id'];
	$producto['precio'] = $_REQUEST['precio'];

	if ($producto['id'] == null) {
		$id = db_insert($conn, 'productos', $producto);
	} else {
		db_update($conn, 'productos', $producto);
		$id = $producto['id'];
	}


	$conn = db_close($conn);
	header('Location: productos.php?editar=' . $id);
} else {
	// Para borrar
	if (isset($_REQUEST['borrar']) and is_integer(intval($_REQUEST['borrar']))) {
		db_delete_by_id($conn, 'productos', $_REQUEST['borrar']);
		// Para editar. Comprobamos que está el parámetro editar y es un número entero
	} else if (isset($_REQUEST['editar']) and is_integer(intval($_REQUEST['editar']))) {
		$id = intval($_REQUEST['editar']);
		// Cargamos el producto con el id
		$res = db_query($conn, "SELECT * FROM productos WHERE id=?", [$id]);

		if (count($res) == 1) {
			$producto = $res[0];
		}
	}
}

$productos = db_query($conn, "SELECT * FROM productos");
$conn = db_close($conn);
$titulo = "Gestión de productos";
$vista = 'productos';

require("../vistas/plantilla.html.php");
