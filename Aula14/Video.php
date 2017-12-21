<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    
    private $titulo, $avalliacao, $views, $curtidas, $reproduzindo;
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAvalliacao() {
        return $this->avalliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvalliacao($avalliacao) {
        $this->avalliacao = $avalliacao;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    public function like() {
        $this->curtidas++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avalliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }
}
