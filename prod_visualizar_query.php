<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT  *
                      FROM    producto 
                      WHERE   $_POST[param] = '$_POST[idq]' "; 

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);
            echo json_encode($row);

?>