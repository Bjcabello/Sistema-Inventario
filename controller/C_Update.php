<?php
//llamamos la conexion de la carpeta models
require('../models/Conection.php');

//Recogemos las variables de la vista EditV.php
$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];

//creamos un objeto para acceder a la clase conection
$con = new Conection();

//traemos los valores de la vistas
$productos = $con->UpdateProduct($id,$Nombre,$Descripcion,$Precio);

header("Location:../index.php");
