<?php

require_once 'Animal.php';

class Ave extends Animal{
    
    private $corPena;
    
    public function alimentar() {
        echo"<pre>Comendo frutas...</pre>";
    }

    public function emitirSom() {
        echo"<pre>Som de ave...</pre>";
    }

    public function locomover() {
        echo"<pre>Voando...</pre>";
    }
    
    function fazerNinho(){
        echo"<pre>Construindo um ninho...</pre>";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}
