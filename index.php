<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      width: 80%;
      margin: 0 auto;
    }
    .etiqueta{
      display:flex;
      flex-direction:row;

    }
    label{
      display: block;
      width: 120px;
    }
    .registro, .items{
      display:flex;
      flex-direction:row;
    }
    input{
      border:none;
      background: #eee;
      box-shadow: #222 0px 1px 3px;
      width: 120px;
      margin: 2px
    }
    div{
      border:none;
      background: #eee;
      box-shadow: #222 0px 1px 3px;
      width: 125px;
      margin: 2px
    }
    .btn{
      background: #33f;
      box-shadow: none;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      height:20px;
      width:100px;
    }
  </style>

  <?php 
    include("conexion.php"); 
    $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ); // $registro tendra un array de objetos

  ?>
</head>
<body>
  <form action="insertar.php" method="POST">
    <section class="etiqueta">
      <label for="nombre"> Nombre </label>
      <label for="apellido"> Apellido </label>
      <label for="direccion"> Direccion </label>
    </section>
    <section class="items">
      <input type="text" name="nombre" value="nombre">
      <input type="text" name="apellido" value="apellido">
      <input type="text" name="direccion" value="direccion">
      <section class="buttons">
        <input class="btn" type="submit" value="Crear">
      </section>  
    </section>
    
  </form>
 <?php foreach ($registros as $usuario):?>
  <section class="registro">
    <div><?php echo $usuario->nombre?></div>
    <div><?php echo $usuario->apellido?></div>
    <div><?php echo $usuario->direccion?></div>
    <a href="borrar.php?id=<?php echo $usuario->id?>"><input class="btn" type="button" value="Borrar"></a>
    <a href="editar.php?id=<?php echo $usuario->id?>&nom=<?php echo $usuario->nombre?>&ape=<?php echo $usuario->apellido?> & dir='<?php echo $usuario->direccion?>'"> <input class="btn" type="button" value="Actualizar"></a>
  </section>
 <?php endforeach ?>

</body>
</html>