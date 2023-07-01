<?php
//llamamos a conexion
require('../models/conection.php');

//Recogemos las variables de la vista anadir.php
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];

//variable $con que es igual a un objeto de la clase conection
$con = new Conection();


$productos = $con->InsertProduct($Nombre,$Descripcion,$Precio);

header('Location:../index.php');