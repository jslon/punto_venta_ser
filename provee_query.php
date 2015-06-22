<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT  nombre, cedula_juridica, correo_contacto, nombre_contacto, pagina_web
                      FROM    proveedor 
                      WHERE   cedula_juridica = '$_POST[idq]' "; 

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);
            echo json_encode($row);

?>