<?php
  //metodo privado solo puede ser accedido en la misma clase que fue creado
  //al mismo tiempo no puede mostrarse fuera
  class clase1
  {

      private function saludar()
      {
      return "saludando";
      }
      private function mandaSaludos()
      {
          return self::saludar();
      }
    }
  

  echo clase1::saludar();

 ?>
