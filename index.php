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

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $tamaño_paginas = 3;
    $pagina = isset($_GET["pag"]) ? $_GET["pag"] : 1; 
    $empezar = ($pagina-1) * $tamaño_paginas;
    $sql_total = ("SELECT * FROM datos_usuarios"); // $registro tendra un array de objetosaa
    $resultado = $base->prepare($sql_total);
    $resultado->execute(array());
    $num_filas = $resultado ->rowCount();

    $total_paginas = ceil($num_filas/$tamaño_paginas);

    $sql_limite= ("SELECT * FROM datos_usuarios LIMIT $empezar, $tamaño_paginas"); // $registro tendra un array de objetosaa
    //LIMIT 0, 3 Permite decidir cuanto elementos recupera la consulta siendo 0 la primero posicion y muestre 3 registro

    $resultado = $base->prepare($sql_limite);

    $resultado->execute(array());

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
 <?php while ($registros=$resultado->fetch(PDO::FETCH_ASSOC)):?>
  <section class="registro">
    <div><?php echo $registros["nombre"]?></div>
    <div><?php echo $registros["apellido"]?></div>
    <div><?php echo $registros["direccion"]?></div>
    <a href="borrar.php?id=<?php echo $registros["id"]?>"><input class="btn" type="button" value="Borrar"></a>
    <a href="editar.php?id=<?php echo $registros["id"]?>&nom=<?php echo $registros["nombre"]?>&ape=<?php echo $registros["apellido"]?> & dir='<?php echo $registros["direccion"]?>'"> <input class="btn" type="button" value="Actualizar"></a>
  </section>
<?php endwhile;
  for($i=1; $i<=$total_paginas; $i++){
    echo "<a href='index.php?pag=$i'>" . $i . "</a>  ";
  }
?>



</body>
</html>