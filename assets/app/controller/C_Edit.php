<?php

//Llamar la conexion
require('../models/conection.php');

//la variable $id va guardar con el metodo get y traemos el id
$id = $_GET['id'];

//mediante este objeto accedemos a la funcion EditProduct
$con = new Conection();

//mandamos a llamar la funcion EditProduct
$productos = $con->EditProduct($id);

//llamamos la vista de EditV.php
require('../views/EditV.php');