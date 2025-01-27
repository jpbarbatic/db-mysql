<?php
require('comun.inc.php');

$conn = db_open();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$categoria['id'] = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
	$categoria['nombre'] = $_REQUEST['nombre'];

	if ($categoria['id'] == null) {
		$id = db_insert($conn, 'categorias', $categoria);
	} else {
		db_update($conn, 'categorias', $categoria);
		$id = $categoria['id'];
	}

	$conn = db_close($conn);
	header('Location: categorias.php?editar=' . $id);
} else {
	// Para borrar
	if (isset($_REQUEST['borrar']) and is_integer(intval($_REQUEST['borrar']))) {
		db_delete_by_id($conn, 'categorias', $_REQUEST['borrar']);
		// Para editar. Comprobamos que está el parámetro editar y es un número entero
	} else if (isset($_REQUEST['editar']) and is_integer(intval($_REQUEST['editar']))) {
		$id = intval($_REQUEST['editar']);
		// Cargamos el categoria con el id
		$res = db_query($conn, "SELECT * FROM categorias WHERE id=?", [$id]);

		if (count($res) == 1) {
			$categoria = $res[0];
		}
	}
}

$categorias = db_query($conn, "SELECT * FROM categorias");
$conn = db_close($conn);

$titulo = 'Gestión de categorías';
$vista = 'categorias';
require("../vistas/plantilla.html.php");
