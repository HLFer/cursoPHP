<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
   
    private $login, $totalAssistido;
    
    
    function __construct($nome, $idade, $sexo, $login) {

        parent::__construct($nome, $idade, $sexo);
         
        $this->login = $login; 
        $this->totalAssistido = 0;
        
    }
    
    function getLogin() {
        return $this->login;
    }

    function getTotalAssistido() {
        return $this->totalAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
    }

    public function assistirMaisUm() {
        $this->totalAssistido++;
    }

}
