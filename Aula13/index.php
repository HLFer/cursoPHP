<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        $m = new Mamifero();
        $l = new Lobo();
        
        //Sobreposição de métodos
        $c->emitirSom();
        $m->emitirSom();
        $l->emitirSom();
        
        //Sobrecarga - PHP não suporta - Uma solução encontrada é dar nomes diferentes para o "mesmo" método. 
        $c->reagirFrase("toma comida");
        $c->reagirHora(11, 10);
        $c->reagirDono(true);
        $c->reagirIdadePeso(10, 5);
     
        ?>
    </body>
</html>
