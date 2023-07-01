<?php
//llamar la conexion
require('../models/conection.php');

//la variable $id va guardar con el metodo get y traemos el id
$id = $_Get['id'];

// Creamos un objeto para acceder a la clase "Conection"
$con = new Conection();

// Creamos una variable que me borre los datos obtenidos de la funcion "getProdcuts"
$productos = $con->DeleteProduct($id);


header("Location:../index.php");