<?php 
  include("conexion.php");

  $id = $_GET["id"];
  $nom = $_POST["nombre"];
  $ape = $_POST["apellido"];
  $dir = $_POST["direccion"];

  // permite inyeccion
  // $base->query("UPDATE datos_usuarios SET nombre='$nom', apellido='$ape', direccion='$dir' WHERE id='$id'");
  // header("Location:index.php");

  $sql = ("UPDATE datos_usuarios SET nombre=:nom, apellido=:ape, direccion=:dir WHERE id=:id");

  $resultados = $base->prepare($sql);

  $resultados->execute(array(":id"=>$id, ":nom"=>$nom, ":ape"=>$ape, ":dir"=>$dir));
  header("Location:index.php");


?>