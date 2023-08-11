<?php
// Llamar la conexion
require('models/conection.php');

// Creamos un objeto para acceder a la clase "Conection"
$con = new Conection();

// Creamos una variable que me guarde los datos obtenidos de la funcion "getProdcuts"
$productos = $con->getProducts();

// Mandamos los datos a la vista correspondiente y los visualizamos 
require('Views/ProductosV.php');

