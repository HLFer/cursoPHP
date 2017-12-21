<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        
        $videos = array();
        
        $videos[0] = new Video("Aula 14 - Projeto Final");
        $videos[1] = new Video("Aula 15 - Aguardando...");
        
        $gafanhoto = new Gafanhoto("Henrique", 27, "Masculino", "HLFer");
        
        echo "<pre>";
        print_r($videos);
        echo "</pre>";
        
                
        echo "<pre>";
        print_r($gafanhoto);
        echo "</pre>";
        
        ?>
    </body>
</html>
