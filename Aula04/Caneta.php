<?php

class Caneta {
    //Utilização dos métodos Getters and Setters
    
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    //Getters 
    public function getModelo(){
        return $this->modelo;
    }
    public function getPonta(){
        return $this->ponta;
    }
    
    //Setters
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
    
    //Método Construtor ---> Pode-se utilizar '__construct' ou o mesmo nome da classe 'Caneta' criar o método
    public function __construct($m, $c, $p) {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
    //Método para tampar a caneta
    public function tampar(){
        $this->tampada = true;
    }
}
