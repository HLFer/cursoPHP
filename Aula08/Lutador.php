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
        echo "<pre><h2>Apresentação: </h2></pre>";
        echo "<pre>Lutador: " . $this->getNome() . ".</pre>";
        echo "<pre>País de origem: " . $this->getNacionalidade() . ".</pre>";
        echo "<pre>Idade: " . $this->getIdade() . " anos.</pre>";
        echo "<pre>Altura: " . $this->getAltura() . " m.</pre>";
        echo "<pre>Pesando: " . $this->getPeso() . " quilos.</pre>";
        echo "<pre>Venceu: " . $this->getVitorioas() . " lutas.</pre>";
        echo "<pre>Perdeu: " . $this->getDerrotas() . " lutas.</pre>";
        echo "<pre>Empatou: " . $this->getEmpates() . " lutas.</pre>";
    }
    function status(){
        echo "<pre><h2>Status do Lutador: </h2></pre>";
        echo "<pre>Lutador: " . $this->getNome() . ".</pre>";
        echo "<pre>Categoria: " . $this->getCategoria(). "</pre>";
        echo "<pre>Venceu: " . $this->getVitorioas() . " lutas.</pre>";
        echo "<pre>Perdeu: " . $this->getDerrotas() . " lutas.</pre>";
        echo "<pre>Empatou: " . $this->getEmpates() . "lutas.</pre>";  
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
            $this->categoria = "Inválido! Lutador abaixo do peso permitido.";
        }
        else if($this->peso <= 70.3){
            $this->categoria = "Peso Leve.";
        }
        else if($this->peso <= 83.9){
            $this->categoria = "Peso Médio.";
        }
        else if($this->peso <= 120.2){
            $this->categoria = "Peso Pesado.";
        }
        else{
            $this->categoria = "Inválido! Lutador acima do peso permitido.";
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
