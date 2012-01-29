<?php

$conn = mysql_connect("localhost","root")
        or die ("No se puede establecer la conexión a la base de datos");

        mysql_select_db("inmuebles_bd") 
        or die("No se tiene acceso a la base de datos");

?>
