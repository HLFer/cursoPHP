<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    
    private $matricula;
    private $curso;
    
    function cancelarMatricula(){
        echo "<pre>A Matrícula será cancelada.</pre>";
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
