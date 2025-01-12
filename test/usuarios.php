<?php
include "config.php";
include "../src/db_mysql.php";
session_start();

function validarUsuario($usuario)
{
	$errores=[];
	
	if($usuario['nombre']==null)
	{
			$errores['nombre']='Nombre vacío o incorrecto';
	}
	if($usuario['nombre_completo']==null)
	{
			$errores['nombre_completo']='Nombre completo vacío o incorrecto';
	}
	if($usuario['email']==null or !filter_var($usuario['email'], FILTER_VALIDATE_EMAIL))
	{
			$errores['email']='Email vacío o incorrecto';
	}
	if($usuario['telefono']==null)
	{
			$errores['telefono']='Teléfono vacío o incorrecto';
	}

	return $errores;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$usuario['id']=isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
	$usuario['nombre']=isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
	$usuario['nombre_completo']=isset($_REQUEST['nombre_completo']) ? $_REQUEST['nombre_completo'] : null;
	$usuario['email']=isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
	$usuario['telefono']=isset($_REQUEST['telefono']) ? $_REQUEST['telefono'] : null;
	
	$errores=validarUsuario($usuario);

	if(empty($errores)){
		$conn=db_open();
		if($usuario['id']==null)
		{
			$id=db_insert($conn, 'usuarios', $usuario);
		}else{
			db_update($conn, 'usuarios', $usuario);
			$id=$usuario['id'];
		}
		$_SESSION['mensaje']='Registro guardado correctamente';
		db_close($conn);
	}else{
		$_SESSION['errores']=$errores;
	}
	
	header('Location: usuarios.php?editar='.$id);	
}else
{
	$conn=db_open();
	
	if(isset($_REQUEST['borrar']) and filter_var($_REQUEST['borrar'], FILTER_VALIDATE_INT))	{
		if(db_delete_by_id($conn, 'usuarios', $_REQUEST['borrar']))		{
			$_SESSION['mensaje']='Elemento borrado correctamente';
		}else{
			$_SESSION['mensaje']='Error borrando registro';
		}
	}else if(isset($_REQUEST['editar']) and filter_var($_REQUEST['editar'], FILTER_VALIDATE_INT))	{
		$res=db_query($conn, 'SELECT * FROM usuarios WHERE id=?', [$_REQUEST['editar']]);
		if(!empty($res)){
			$usuario=$res[0];
		}else{
			$_SESSION['mensaje']='Elemento no encontrado';
		}
	}	

	$usuarios=db_query($conn, "SELECT * FROM usuarios");
	
	db_close($conn);
	
	// Cargamos la vista HTML
	require('formularioUsuario.php');
	// Una vez generada la vista borramos los mensajes en la sesión
	unset($_SESSION['errores']);
	unset($_SESSION['mensaje']);
}
?>
