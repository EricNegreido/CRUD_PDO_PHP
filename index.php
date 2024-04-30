<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    form{
      display:flex;
      width: 80%;
      gap:5px;
    }
    .items{
      display:flex;
      flex-direction:column;
      width:50%;
      max-width: 250px;
    }
    input{
      border:none;
      background: #eee;
      box-shadow: #222 0px 1px 3px;
      width:90%;
      max-width: 300px;
    }
    .buttons{
      width: 40%;
      display: flex;
      flex-direction: column;
      max-width: 300px;


    }
    .btn{
      margin: 2px;
      background: #33f;
      box-shadow: none;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      height:30px;
      width:40%;
      max-width:180px;
    }
  </style>

  <?php 
    inlcude("conexion.php"); 
    $registros = $base-> query("SELECT * FROM DATOS_USUARIOS")-> fetchAll (PDO::FETCH_OBJ); // $registro tendra un array de objetos

  ?>
</head>
<body>
  <form action="">
    <section class="items">
      <label for="nombre"> Nombre </label>
      <input type="text" name="nombre" value="nombre">
      <label for="apellido"> Apellido </label>
      <input type="text" name="apellido" value="apellido">
      <label for="direccion"> Direccion </label>
      <input type="text" name="direccion" value="direccion">
    </section>
    <section class="buttons">
      <input class="btn" type="button" value="Crear">
      <input class="btn" type="button" value="Borrar">
      <input class="btn" type="button" value="Actualizar">
      <input class="btn" type="button" value="Buscar">
    </section>  
  </form>
</body>
</html>