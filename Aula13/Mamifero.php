<?php

require_once 'Animal.php';

class Mamifero extends Animal{    
    
    protected $corPelo;
    
    public function emitirSom() {
        echo"<pre>Som de mamífero...</pre>";
    }
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
