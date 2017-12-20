<?php

require_once 'Lutador.php';

class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos
    function marcarLuta($lutador1, $lutador2){
        if(($lutador1->getCategoria() === $lutador2->getCategoria()) && ($lutador1 != $lutador2)){
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(NULL);
            $this->setDesafiante(NULL);
        }
    }
    function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            
            $vencedor = random_int(0, 2);
            
            echo "<pre><h2>Detalhes da luta: </h2></pre>";
            
            switch ($vencedor) {
                case 0://Empate
                    echo "<pre>A luta terminou empatada!</pre>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1://Vitória do desafiado
                    echo "<pre>Vitória do Lutador: " . $this->desafiado->getNome() . ".</pre>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                
                case 2://Vitória do desafiante
                    echo "<pre>Vitória do Lutador: " . $this->desafiante->getNome() . ".</pre>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();    
                    break;
                
                default:
                    echo "<pre>ERRO!</pre>";
                    break;
            }
            
        }else{
            echo "<pre>Esta luta não pode acontecer! Luta NÃO APROVADA!</pre>";
        }
    }
    //Métodos Especiais
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
