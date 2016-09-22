<?php
	include('inc/conexion.php');

	$sql	=	'UPDATE personas SET '
			.	"paterno = '{$_POST['text-paterno']}', "
			.	"materno = '{$_POST['text-materno']}', "
			.	"nombres = '{$_POST['text-nombres']}' "
			.	"where personas_id = {$_POST['text-id']}";
	$resultado = $conexion->query($sql);
	if ($resultado)
	{
		header('Location: listar.php');
	}
	else
	{
		header('Location: listar.php');
	}
?>