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
        require_once 'Visualizacao.php';
        
        $videos = array();
        
        $videos[0] = new Video("Aula 14 - Projeto Final");
        $videos[1] = new Video("Aula 15 - Aguardando...");
        
        $gafanhoto = new Gafanhoto("Henrique", 27, "Masculino", "HLFer");
        
        $views = array();
        
        $views[0] = new Visualizacao($gafanhoto, $videos[0]);
        
        $views[0]->avaliar();
        $views[0]->avaliarNota(8);
        
        
        echo "<pre>";
        print_r($videos);
        echo "</pre>";
                        
        echo "<pre>";
        print_r($gafanhoto);
        echo "</pre>";
        
        echo "<pre>";
        print_r($views);
        echo "</pre>"
        
        ?>
    </body>
</html>
