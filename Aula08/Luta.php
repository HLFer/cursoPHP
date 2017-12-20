<?php

require_once 'Lutador.php';

class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos
    function marcarLuta(){
        
    }
    function lutar(){
        
    }
    //Métodos Especiais
    function __construct($desafiado, $desafiante, $rounds, $aprovada) {
        $this->desafiado = $desafiado;
        $this->desafiante = $desafiante;
        $this->rounds = $rounds;
        $this->aprovada = $aprovada;
    }
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}
