<?php
include "config.php";
include "../src/db_mysql.php";

$usuario=[
	'nombre'=>'estebanc',
	'nombre_completo'=>'Esteban Coesta Ocupado',
	'email'=>'calimero@gmail.com',
	'telefono'=>'32423423'
];
print_r($usuario);

$conn=db_open();
	// Insertamos un usuario
	$id=db_insert($conn, 'usuarios', $usuario);

	// Obtenemos el usuario que hemos insertado
	$usuario=db_query($conn, "SELECT * FROM usuarios WHERE id=?", [$id])[0];
	print_r($usuario);

	// Cambiamos el correo
	$usuario['email']='estebanc@gmail.com';

	// Actualizamos el usuario
	db_update($conn, 'usuarios', $usuario);

	// Obtenemos el usuario 
	$usuario=db_query($conn, "SELECT * FROM usuarios WHERE id=?", [$id])[0];
	print_r($usuario);
db_close($conn);