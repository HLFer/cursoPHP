<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $pessoa = new Pessoa();
        $aluno = new Aluno();
        $professor = new Professor();
        $funcionario = new Funcionario();
        
        $pessoa->setNome("Pedro");
        $aluno->setNome("Maria");
        $professor->setNome("Cláudio");
        $funcionario->setNome("Fabiana");
        
        $aluno->setCurso("Programação Orientada à Objetos em PHP");
        
        $professor->setSalario(3500);
        
        $funcionario->setSetor("Informática");
        
        echo "<pre>";
        print_r($pessoa);
        print_r($aluno);
        print_r($professor);
        print_r($funcionario);
        echo "</pre>";
        
        ?>
    </body>
</html>
