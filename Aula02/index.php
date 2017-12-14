<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso POO em PHP - Aula 02</title>
    </head>
    <body>
        <?php
        //Faz com que a classe caneta seja instanciada dentro do index
        require_once 'Caneta.php';
        
        //Cria um objeto do tipo caneta(classe)
        $c1 = new Caneta;
        
        $c1->carga = 80;
        $c1->cor = "Azul";
        $c1->modelo = "BIC";
        $c1->ponta = 0.7;
        $c1->tampada = true;
        
        
        echo "<pre>";
        print_r($c1);
        echo "</pre>";
        
        echo "<pre>";
        var_dump($c1);
        echo "</pre>";
        
        $c1->destampar();
        
        $c1->rabiscar();
        
        echo "<pre>";
        print_r($c1);
        echo "</pre>";
        
        echo "<pre>";
        var_dump($c1);
        echo "</pre>";

        
        $c1->tampar();
        
        $c1->rabiscar();
        
        ?>
    </body>
</html>
