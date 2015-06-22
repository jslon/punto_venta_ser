<?php

$_empresa='1';

if ($_POST['empresa_agregar'])	{
	echo "esta mamando";
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query = "INSERT INTO empresa(nombre,cedula_juridica,logo) 
	VALUES ('$_POST[empresa_nombre]' ,'$_POST[empresa_cedjur]' ,'$_POST[empresa_logo]')";
	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "Empresa Agregada";
	header('Location:./empresaform.php');
}

if ($_POST['empresa_modificar'])	{
	
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query = $query = "UPDATE empresa SET nombre = '$_POST[empresa_nombre]' , logo = '$_POST[empresa_logo]'
	WHERE cedula_juridica = '$_POST[empresa_cedjur]'";
	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "Empresa Modificada";
	header('Location:./empresaform.php');
}

pg_close($conec);

?>