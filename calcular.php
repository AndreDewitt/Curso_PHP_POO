<?php

  class calculadora
  {

    function calcularDatos($val1,$val2,$opcion)
    {
      switch ($opcion) {
        case 'suma':
        return $val1 + $val2;
          break;
        case 'resta':
        return $val1 - $val2;
          break;
        case 'multiplicacion':
          return $val1 * $val2;
          break;
        case 'divison':
            return $val1 / $val2;
          break;
          default:
          break;
      }
    }
  }


 ?>
