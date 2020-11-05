<?php

  /**
   *
   */
  class padre
  {

    function metodoPadre()
    {
      return "hola desde el padre";
    }
    public function metodo1() {
      return "este es metodo padre";
    }
  }


  class hijo extends padre
  {
    public function metodohijo()
    {
      return parent:: metodo1();
    }
    public function metodo1()
    {
      return "este es metodo hijo";
    }
  }

    //la herencia es obtener todas las propiedades de una clase a otra
    //mediante la palabra

  echo hijo::metodohijo();

 ?>
