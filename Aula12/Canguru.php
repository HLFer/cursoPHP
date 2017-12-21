<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{
 
    function locomover(){
      echo"<pre>Saltando...</pre>";  
    }
    
    function usarBolsa(){
        echo "<pre>Usando a bolsa...</pre>";
    }
    
}
