<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;
    
    //Métodos - Construtor/getters and setters
    function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotalPaginas() {
        return $this->totalPaginas;
    }

    function getPaginaAtual() {
        return $this->paginaAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotalPaginas($totalPaginas) {
        $this->totalPaginas = $totalPaginas;
    }

    function setPaginaAtual($paginaAtual) {
        $this->paginaAtual = $paginaAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    
    //Métodos Especiais
    function detalhes(){
        echo"<pre>Título do Livro: ". $this->getTitulo() . ".</pre>";
        echo"<pre>Autor do Livro: ". $this->getAutor() . ".</pre>";
        echo"<pre>Total de páginas do Livro: ". $this->getTotalPaginas() . ".</pre>";
        echo"<pre>Página Atual: ". $this->getPaginaAtual() . ".</pre>";
        //echo"<pre>Livro aberto: ". $this->getAberto() . ".</pre>";
        echo"<pre>Nome do Leitor atual: ". $this->leitor->getNome() . ".</pre>";
    }
    
    function abrir(){
        $this->aberto = true;
    }
    function fechar(){
        $this->aberto = false;
    }
    function folhear($numPag){
        if($numPag > $this->totalPaginas){
            echo "<pre>Não é possível avançar esta quantidade de páginas.</pre>";
        }else{
            $this->paginaAtual = $this->paginaAtual + $numPag;
        }
    }
    function avancarPag(){
        if($this->paginaAtual >= $this->totalPaginas){
            echo "<pre>Não é possível avançar a página.</pre>";
        }
        $this->paginaAtual++;
    }
    function voltarPag(){
        if($this->paginaAtual == 0){
            echo "<pre>Não é possível voltar a página.</pre>";
        }
        $this->paginaAtual--;
    }
}
