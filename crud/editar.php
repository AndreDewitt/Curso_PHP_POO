<?php
  require_once "conexion.php";
  $obj = new conectar();
  $conexion=$obj->conexion();
  $id=$_GET['id'];
  $sql="SELECT nombre,apellido
          FROM t_persona where id='$id'";
  $result = mysqli_query($conexion,$sql);
  $ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="proceso/actualizar.php" method="post">
      <input type="text" hidden="" name="id" value="<?php echo $id ?>">
      <p></p>
      <label for="">Nombre</label>
      <p></p>
      <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
      <p></p>
      <label for="">Apellido</label>
      <p></p>
      <input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
      <p></p>
      <button >editar</button>
    </form>
  </body>
</html>
