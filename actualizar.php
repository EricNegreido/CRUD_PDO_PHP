<?php 
  include("conexion.php");

  $id = $_GET["id"];
  $nom = $_POST["nombre"];
  $ape = $_POST["apellido"];
  $dir = $_POST["direccion"];

  $base->query("UPDATE datos_usuarios SET nombre='$nom', apellido='$ape', direccion='$dir' WHERE id='$id'");
  header("Location:index.php");
?>