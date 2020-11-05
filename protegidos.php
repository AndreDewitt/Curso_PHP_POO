<?php
  //los metodos protegidos solo pueden ser accedidos desde herencia de
  //clases o clases hijas

  /**
   *
   */
  class clasePadre
  {

  protected function metodo1()
    {
      return "metodo protegido";
    }
  }
    class claseHijo extends clasePadre
    {
public function muestra()
      {
      return parent::metodo1();
      }
    }




 echo claseHijo::muestra();

 ?>
