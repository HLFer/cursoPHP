<?php

require_once 'Animal.php';

class Peixe extends Animal{
    
    private $corEscama;
    
    public function alimentar() {
        echo"<pre>Comendo plâncton...</pre>";
    }

    public function emitirSom() {
        echo"<pre>Não emite som...</pre>";
    }

    public function locomover() {
        echo"<pre>Nadando...</pre>";
    }
    
    public function soltarBolha(){
        echo"<pre>Soltou uma bolha...</pre>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
