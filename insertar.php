<?php 
  include("conexion.php");

  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $direccion = $_POST["direccion"];

  $sql =("INSERT INTO datos_usuarios (nombre, apellido, direccion) VALUES (:nombre, :apellido, :direccion)");

  $resultados = $base->prepare($sql);

  $resultados->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":direccion"=>$direccion));
  header("Location:index.php")
?>