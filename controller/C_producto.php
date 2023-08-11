<?php
//Llamar la conexion
require('../models/conection.php');

//creamos un objeto para acceder a la clase conecttion
$con = new Conection();

//creamos una variable(productos) que me guarde los datos
$productos = $con->Product($_POST['buscador']);
require('../views/ProductsV.php');