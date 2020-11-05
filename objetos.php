<?php

  /**
   *
   */
  class miclase extends AnotherClass
  {
    //mis atributos
    public $resultado=0;

    //mis metodos
    public function miMetodo($v1, $v2){
        $this->resultado = $v1 + $v2;
        return this->resultado;
    }

  }

    //instanciar un objeto
    $miObjetos = new miClase();
    $v1 = 5; 
    $v2 = 10;
    echo $miObjeto->miMetodo($v1,$v2);

  ?>
