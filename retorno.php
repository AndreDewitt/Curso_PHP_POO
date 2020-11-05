<?php

    class retorno
    {

      function retornarString($edad)
      {
        if($edad > 18){
            return "Es mayor de edad";
        }else{
          return "no es mayor de edad";
        }
      }

      public function retornaEntero($valor)
      {
        if ($valor > 0) {
          return 1;
        }else {
          return 0;
        }
      }

      public function retornaArreglo($ciclos)
      {
        $datos=array();

        for ($i=0; $i < $ciclos; $i++) {
          $datos[$i] = $i;
        }
        return $datos;
      }
    }

    $cadena = new retorno();
    var_dump($cadena->retornarString(19));
    echo "<br>";
    var_dump($cadena->retornaEntero(1));
    echo "<br>";
    var_dump($cadena->retornaArreglo(10));
  ?>
