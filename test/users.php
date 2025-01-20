<?php
require("config.php");
require("../src/db_mysql.php");

$conn=db_open();

if($_SERVER['REQUEST_METHOD']=='POST'){	
	$usuario['id']=$_REQUEST['id'];	
	$usuario['nombre']=$_REQUEST['nombre'];
	$usuario['nombre_completo']=$_REQUEST['nombre_completo'];
	$usuario['email']=$_REQUEST['email'];
	$usuario['telefono']=$_REQUEST['telefono'];
	$usuario['password']=$_REQUEST['password'];	
	
	if($usuario['id']==''){
		$id=db_insert($conn, 'usuarios', $usuario);	
	}else{
		db_update($conn, 'usuarios', $usuario);
		$id=$usuario['id'];
	}

	
	$conn=db_close($conn);
	header('Location: users.php?editar='.$id);
}else{	
	// Para borrar
	if(isset($_REQUEST['borrar']) and is_integer(intval($_REQUEST['borrar']))){
		db_delete_by_id($conn, 'usuarios', $_REQUEST['borrar']);
	// Para editar. Comprobamos que está el parámetro editar y es un número entero
	}else if(isset($_REQUEST['editar']) and is_integer(intval($_REQUEST['editar']))){
		$id=intval($_REQUEST['editar']);
		// Cargamos el usuario con el id
		$res=db_query($conn, "SELECT * FROM usuarios WHERE id=?", [$id]);
		
		if(count($res)==1){
			$usuario=$res[0];
		}
	}
}

$usuarios=db_query($conn, "SELECT * FROM usuarios");
$conn=db_close($conn);
require("users.html.php");

