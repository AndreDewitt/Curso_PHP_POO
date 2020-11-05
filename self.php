<?php

  /**
   *
   */
  class metodos
  {

    public function mandarColor($valor)
    {
      if ($valor == 1) {
        return "rojo";
      }else if ($valor ==2) {
        return "negro";
      }else if ($valor ==3) {
        return "Azul";
      }
    }
  public function AltaColor($tipocolor)
  {
    return self::mandarColor($tipocolor);
  }
}

$obj = new metodos();
echo $obj->AltaColor(3);

 ?>
