<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT u.password, u.usuario, u.apellido1, u.apellido2, u.id_usuario, u.rol, u.nombre, t.telefono
                      FROM    usuario as u, telefono_usuario as t
                      WHERE   u.id_usuario = t.id_usuario AND u.id_usuario = '$_POST[idq]';"; 

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);
            echo json_encode($row);

?>