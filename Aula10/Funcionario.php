<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{
    
    private $setor;
    private $trabalhando;
    
    function mudarTrabalho(){
        if($this->trabalhando){
            $this->trabalhando = false;
        }else
            $this->trabalhando = true;
    }
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }    
}
