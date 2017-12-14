<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        
        if($this->tampada){
            echo "<pre>Não posso rabiscar com a caneta tampada!</pre>";           
        }
        else{
            echo "<pre>Estou rabscando...</p>";
        } 
    }
    
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
    
}
