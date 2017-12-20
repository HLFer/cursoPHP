<?php

class Lutador {
    
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorioas;
    private $derrotas;
    private $empates;
    
    //Métodos
    function apresentar(){
        echo "<pre>Lutador: </pre>" . $this->getLutador() . ".";
        echo "<pre>País de origem: </pre>" . $this->getNacionalidade() . ".";
        echo "<pre>Idade: </pre>" . $this->getIdade() . "anos.";
        echo "<pre>Altura: </pre>" . $this->getAltura() . "m.";
        echo "<pre>Pesando: </pre>" . $this->getPeso() . "quilos.";
        echo "<pre>Venceu: </pre>" . $this->getVitorioas() . "lutas.";
        echo "<pre>Perdeu: </pre>" . $this->getDerrotas() . "lutas.";
        echo "<pre>Empatou: </pre>" . $this->getEmpates() . "lutas.";
    }
    function status(){
        echo "<pre>Lutador: </pre>" . $this->getLutador() . ".";
        echo "<pre>Categoria: </pre>" . $this->getCategoria();
        echo "<pre>Venceu: </pre>" . $this->getVitorioas() . "lutas.";
        echo "<pre>Perdeu: </pre>" . $this->getDerrotas() . "lutas.";
        echo "<pre>Empatou: </pre>" . $this->getEmpates() . "lutas.";  
    }
    function ganharLuta(){
        $this->setVitorioas($this->getVitorioas() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    //Métodos Especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorioas, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorioas = $vitorioas;
        $this->derrotas = $derrotas;
        $this->empates = $empates;     
    }
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorioas() {
        return $this->vitorioas;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if($this->peso < 52.2){
            $this->categoria = "<pre>Inválido! Lutador abaixo do peso permitido</pre>";
        }
        else if($this->peso <= 70.3){
            $this->categoria = "<pre>Peso Leve.</pre>";
        }
        else if($this->peso <= 83.9){
            $this->categoria = "<pre>Peso Médio.</pre>";
        }
        else if($this->peso <= 120.2){
            $this->categoria = "<pre>Peso Pesado.</pre>";
        }
        else{
            $this->categoria = "<pre>Inválido! Lutador acima do peso permitido.</pre>";
        }
    }

    function setVitorioas($vitorioas) {
        $this->vitorioas = $vitorioas;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }
    
}
