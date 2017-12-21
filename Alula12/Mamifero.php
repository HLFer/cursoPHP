<?php

require_once 'Animal.php';

class Mamifero extends Animal{
    //Atributos
    private $corPelo;
    
    //Métodos Especiais
    function locomover(){
      echo"<pre>Correndo...</pre>";  
    }
    
    function alimentar(){
      echo"<pre>Mamando...</pre>";  
    }
    
    function emitirSom(){
       echo"<p>Som de mamífero...</pre>";
    }
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
