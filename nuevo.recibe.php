<?php
	include('inc/conexion.php');

	$sql	=	'INSERT INTO personas SET '
			.	"paterno = '{$_POST['text-paterno']}', "
			.	"materno = '{$_POST['text-materno']}', "
			.	"nombres = '{$_POST['text-nombres']}'";
	$resultado = $conexion->query($sql);
	if ($resultado)
	{
		header('Location: listar.php');
	}
	else
	{
		header('Location: nuevo.php');
	}
?>