<?php 
 try {
  $base = new PDO('mysql:host=localhost; dbname=CRUD_PDO', 'root', ''); 
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $base->exec("SET CHARACTER SET UTF8");
 } catch (Exception $e) {
  die('Error' . $e->getMessage());
  echo " LINEA DEL ERROR: " . $e ->getLine();
 }
?>