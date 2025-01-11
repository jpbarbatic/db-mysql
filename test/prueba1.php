<?php

include "config.php";
try{
	$conn=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

	$res=mysqli_query($conn, "SELECT * FROM usuarios");
	$usuarios=mysqli_fetch_all($res, MYSQLI_ASSOC);
	print_r($usuarios);
	mysqli_free_result($res);

	mysqli_close($conn);
}
catch(Exception $e)
{
	die("Se ha producido un error: ".mysqli_connect_error());
}


