<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso POO em PHP - Aula 03</title>
    </head>
    <body>
        <?php
        //Faz com que a classe caneta seja instanciada dentro do index
        require_once 'Caneta.php';
        
        //Cria um objeto do tipo caneta(classe)
        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        echo "<pre>";
        var_dump($c1);
        echo "</pre>";
        
        $c1->tampar();
        
        echo "<pre>";
        var_dump($c1);
        echo "</pre>";
        
        ?>
    </body>
</html>
