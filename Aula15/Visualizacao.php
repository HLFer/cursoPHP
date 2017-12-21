<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {
    
    private $espectador, $filme;
    
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }

    function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    
    function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    
    function avaliarPorcentagem($porcentagem){
        
        $nova = 0;
        if($porcentagem <=20){
            $nova = 3;
        }elseif($porcentagem <=50){
            $nova = 5;
        }elseif($porcentagem <=90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}
