<?php
include "config.php";
include "db_mysql.php";

$usuario=[
	'nombre'=>'estebanc',
	'nombre_completo'=>'Esteban Coesta Ocupado',
	'email'=>'calimero@gmail.com'
];
print_r($usuario);

$conn=db_open();
$id=db_insert($conn, 'usuarios', $usuario);
$usuario['id']=$id;
$usuario['email']='estebanc@gmail.com';
db_update($conn, 'usuarios', $usuario);

$usuario=db_query($conn, "SELECT * FROM usuarios WHERE id=?", [$id]);
print_r($usuario);

db_close($conn);