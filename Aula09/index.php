<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $pessoa = array();
        
        $pessoa[0] = new Pessoa("Rafael", 25, "Masculino");
                
        $livro = array();
        
        $livro[0] = new Livro("O Senhor dos Anéis", "J. R. R. Tolkien", 600, $pessoa[0]);
        
        
        //echo "<pre>";
        //print_r($pessoa[0]);
        //echo "</pre>";
        
        //echo "<pre>";
        //print_r($livro[0]);
        //echo "</pre>";
        
        $livro[0]->avancarPag();
        
        $livro[0]->folhear(19);
        
        $livro[0]->detalhes();
        
        ?>
    </body>
</html>
