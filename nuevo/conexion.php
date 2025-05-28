<?php

    $mysqli = mysqli_connect("localhost", "root", "", "pilatos");

    if ($mysqli -> connect_errno) {

        printf ("Fallo la conexion: %s\n", $mysqli -> connect_error); 
        exit();

    }

?>