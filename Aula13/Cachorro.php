<?php

require_once 'Lobo.php';

class Cachorro {
    function emitirSom(){
        echo"<pre>Au! Au! Au!</pre>";
    }
    
    //PHP não suporta a sobrecarga, por isso devemos resolver o problema de outra
    //maneira, por exemplo, dar nomes diferentes para o "mesmo" método.
    
    function reagirFrase($frase){
        if($frase == "toma comida" || $frase == "Ola"){
            echo "<pre>Abana o rabo e late...</pre>";
        }else
            echo "<pre>Rosna...</pre>";
    }
    
    function reagirHora($hora, $min){
        if($hora < 12){
            echo "<pre>Abana o rabo...</pre>";
        }elseif($hora>=18){
            echo "<pre>Ignora...</pre>";
        }else
            echo "<pre>Abana o rabo e late...</pre>";
    }
    
    function reagirDono($dono){
        if($dono){
            echo "<pre>Abana o rabo...</pre>";
        } else
            echo "<pre>Rosna e late...</pre>";
    }
    
    function reagirIdadePeso($idade, $peso){ 
        if($idade < 5){
            if($peso < 10){
                echo "<pre>Abana o rabo...</pre>";
            }else
                echo "<pre>late...</pre>";
        }else{
            if($peso < 10){
                echo "<pre>Rosna...</pre>";
            } else
                echo "<pre>Ingnora...</pre>";
        }
    }
}
