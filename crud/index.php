<?php
require_once "conexion.php";
require_once "metodosCrud.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>crud</title>
  </head>
  <body>

    <form class="" action="proceso/insertar.php" method="post">
      <label for="">Nombre</label>
      <p></p>
      <input type="text" name="txtnombre" value="">
      <p></p>
      <label for="">Apellido</label>
      <p></p>
      <input type="text" name="txtapellido" value="">
      <p></p>
      <button >agregar</button>
    </form>

    <br><br>
    <table style="border-collapse: collapse;" border="1";>
      <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Eliminar</td>
      </tr>
      <?php
        $obj = new metodos();
        $sql="SELECT id,nombre,apellido from t_persona";
        $datos=$obj->mostrarDatos($sql);

        foreach ($datos as $key ) {
          ?>
       <tr>
          <td><?php echo $key['nombre']?></td>
          <td><?php echo $key['apellido']?></td>
          <td><a href="editar.php?id=<?php echo $key['id'] ?>">editar</a></td>
          <td><a href="proceso/eliminar.php?id=<?php echo $key['id'] ?>">eliminar</a></td>
      </tr>
      <?php
          }
       ?>
    </table>
  </body>
</html>
