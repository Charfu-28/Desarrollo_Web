<?php
	require 'conexion.php';
	sleep(2);
	$usuarios = $mysqli->query("SELECT Tipo_Usuario, Nombre_Usuario FROM
	usuarios WHERE Nombre_Usuario = '".$_POST['usuariolg']."' AND Contrasenia = '".$_POST['pass_lg']."'");

	if ($usuarios->num_rows == 1):
		$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error' => false, 'Tipo' => $datos['Tipo_Usuario']));
	else:
		echo json_encode(array('error' => true));
	endif;
	$mysqli->close();
?>