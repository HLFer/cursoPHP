<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    
    private $matricula, $curso;
    
    function pagarMensalidade(){
        echo "<pre>A Mensalidade do aluno ". $this->nome ." foi paga!</pre>";
    }
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }
}
