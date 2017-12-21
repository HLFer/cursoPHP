<?php

abstract class Animal {
    
    //Atributos
    protected $peso, $idade, $membros;
    
    //Métodos Abstratos
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom(); 
    
    //Métodos especiais
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setMembros($membros) {
        $this->membros = $membros;
    }    
}
