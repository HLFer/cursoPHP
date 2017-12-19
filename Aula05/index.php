<?php

require_once 'ContaBanco.php';


$pessoa = new ContaBanco(12345678, "CC", "Henrique Lucas Fernandes", 0);

echo "<pre>";
print_r($pessoa);
//var_dump($pessoa);
echo "</pre>";

$pessoa->depositar(200);

$pessoa->pagarMensal();

echo "<pre>";
print_r($pessoa);
//var_dump($pessoa);
echo "</pre>";