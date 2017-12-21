<?php

require_once 'Aluno.php';

class Bolsista extends Aluno{
   
    private $bolsa;
    
    function renovarBolsa(){
        echo "<pre>A Bolsa do aluno " .$this->nome. " foi renovada.</pre>";
    }
    function pagarMensalidade(){
         echo"<pre> O aluno(a) ". $this->nome . " é Bolsista e paga a mensalidade com desconto.</pre>";
    }
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
