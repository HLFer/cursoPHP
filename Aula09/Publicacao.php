<?php

interface Publicacao{
    function abrir();
    function fechar();
    function folhear($numPag);
    function avancarPag();
    function voltarPag();
    
}
