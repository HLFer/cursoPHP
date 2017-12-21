<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        //require_once'Pessoa.php';
        require_once'Visitante.php';
        require_once'Aluno.php';
        require_once'Bolsista.php';
        
        //Herança(pessoa) pobre
        $visitante = new Visitante();
        $visitante->setNome("Fulano");
        $visitante->setIdade(25);
        $visitante->setSexo("Masculino");
        print_r($visitante);
        
        //Herança(pessoa) para diferença
        $aluno = new Aluno();
        $aluno->setIdade(27);
        $aluno->setNome("Juvenal");
        $aluno->setSexo("Masculino");
        $aluno->setCurso("Informática");
        $aluno->setMatricula(443232);
        $aluno->pagarMensalidade();
        print_r($aluno);
        
        //Herança(aluno) para diferença - sobrepondo o método pagarMensalidade()
        $bolsista = new Bolsista();
        $bolsista->setIdade(22);
        $bolsista->setNome("Rafaela");
        $bolsista->setSexo("Feminino");
        $bolsista->setCurso("Comunicação");
        $bolsista->setMatricula(112567);
        $bolsista->setBolsa(15);
        $bolsista->pagarMensalidade();
        print_r($bolsista);
        
        ?>
        </pre>
    </body>
</html>
