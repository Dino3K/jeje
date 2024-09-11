<?php

include_once('conexion.php');


$sql = "INSERT INTO tbl_member (username,password)

VALUES('Pedro','1234');";



if ($conexion->query($sql) === TRUE) {

    echo "Registro ingresado correctamente.";
} else {

    echo $conexion->error;
}


$conexion->close();
