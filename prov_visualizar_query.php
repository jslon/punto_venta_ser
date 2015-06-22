<?php 
	$conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS) or die ('problemas de conexion'.pg_last_error());
	$query = "SELECT *
		FROM proveedor
		WHERE $_POST['param'] = $_POST['idq']";

?>
