<?php

class Conection{

// Variable conection privada
private $conect;

    // Contruct guarda la conexion
public function __construct()
{
    // Se crea una sub variable para que esta pueda ser accedida y se crea la conexion
    $this->conect = new mysqli('localhost','root','','inventario');
}
// Funcion para mandar a llamar los producto generales 
public function getProducts(){
    // Pedimos a la conexion los datos a la base de datos
    $peticion = $this->conect->query('SELECT * FROM productos');
    $datos = [];
    $i =0;
    // Ejecutamos un ciclo que me recorra los datos obtenido de la peticion a la base de datos
    while($fila = $peticion->fetch_assoc()){
        // Guardamos los datos en un arreglo
        $datos[$i] = $fila;
        $i++;
    }
    // Se retornan los registros obtenidos de la base de datos 
    return $datos;
}
// Funcion para pedir productos generales
public function Product($Nombre){
        // Realizamos la peticion a la base de datos con la condicion
        // Si el campo nombre es igual a la variable "$Nombre" me regrese todo el contenido
    $peticion = $this->conect->query("SELECT * FROM productos WHERE Nombre = '$Nombre'");
    $datos=[];
    $i = 0;
        // Recorremos todos los datos y los guardamos en un arreglo seguro
        while($fila = $peticion->fetch_assoc()){
            $datos[$i] = $fila;
            $i++;
        }

        return $datos;
    
}

public function EditProduct($id){
   // Realizamos la peticion a la base de datos con la condicion
        // Si el campo nombre es igual a la variable "$Nombre" me regrese todo el contenido
    $peticion = $this->conect->query("SELECT *FROM productos WHERE id_productos = '$id'");

    $datos=[];
    $i = 0;
 // Recorremos todos los datos y los guardamos en un arreglo seguro
        while($fila = $peticion->fetch_assoc()){
            $datos[$i] = $fila;
            $i++;
        }
            // Retorno de los datos dentro de un arreglo
        return $datos;
}
    // funcion para actualizar los productos
public function UpdateProduct($id,$Nombre,$Descripcion,$Precio){
    // Realiza la peticion para actualizar los productos con los parametros obtenidos
    $peticion = $this->conect->query("UPDATE productos SET Nombre = '$Nombre', Descripcion = '$Descripcion',Precio = '$Precio' WHERE id_productos = '$id'");

}
    // Funcion para insertar productos
public function InsertProduct($Nombre,$Descripcion,$Precio){
    $peticion = $this->conect->query("INSERT INTO productos (Nombre,Descripcion,Precio) VALUES ('$Nombre','$Descripcion','$Precio')");
}

// Funcion para Eliminar productos

public function DeleteProduct($id){

    $peticion = $this->conect->query("DELETE FROM productos WHERE id_productos = '$id'");
}
}