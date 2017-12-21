<?php

require_once 'Animal.php';

class Reptil extends Animal{
    
    private $corEscama;
    
    function locomover(){
        echo"<pre>Rastejando...</pre>";
    }

    public function alimentar() {
        echo"<pre>Comendo vegetais...</pre>";
    }

    public function emitirSom() {
        echo"<pre>Som de réptil...</pre>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}
