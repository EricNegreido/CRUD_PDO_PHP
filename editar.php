

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
    .items{
      display:flex;
      flex-direction:row;
    }
    input{
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
</head>
<body>
<?php
  $id = $_GET["id"];
  $nom = $_GET["nom"];
  $ape = $_GET["ape"];
  $dir = $_GET["dir"];
?>
  
  <form action="actualizar.php?id=<?php echo $id ?>" method="POST">
    <section class="etiqueta">
      <label for="nombre"> Nombre </label>
      <label for="apellido"> Apellido </label>
      <label for="direccion"> Direccion </label>
    </section>
    <section class="items">
      <input type="text" name="nombre" value=<?php echo $nom ?>>
      <input type="text" name="apellido" value=<?php echo $ape ?>>
      <input type="text" name="direccion" value=<?php echo $dir ?>>
      <input class="btn" type="submit" value="Actualizar">
    </section>
    
  </form>
</body>
</html>