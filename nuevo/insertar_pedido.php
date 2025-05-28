<?php

    include("conexion.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $departamento = $_POST["departamento"];
    $codigopostal = $_POST["codigo_postal"];

    if ($email && $password && $nombre && $direccion && $ciudad && $departamento && $codigopostal) {

        $sql = "INSERT INTO pedido (id_pedido, email_pedido, password_pedido, nombre_pedido, direccion_pedido, ciudad_pedido, departamento_pedido, codigo_postal_pedido, fecha_pedido) VALUES (NULL, '$email', '$password', '$nombre', '$direccion', '$ciudad', '$departamento', '$codigopostal', NULL)";
        mysqli_query($mysqli, $sql);

        echo '<script type="text/javascript"> alert("Tarea Guardada");
        window.location.href = "./nuevo.html"; </script>';

    } else {

        
        echo '<script type="text/javascript"> alert("Debes Llenar Todos Los Campos");
        window.location.href = "./nuevo.html"; </script>';

    }

?>