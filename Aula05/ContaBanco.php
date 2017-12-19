<?php

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Getters and Setters
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    
    //Método construtor
    function ContaBanco($numConta, $tipo, $dono, $saldo) {
        
        $this->numConta = $numConta;
        
        //O cliente recebe 50 para abrir uma conta corrente
        if($tipo == "CC"){
            $this->tipo = $tipo;
            $this->saldo = $saldo + 50;
        }
        //O cliente recebe 150 para abrir uma conta poupança
        else if($tipo == "CP"){
            $this->tipo = $tipo;
            $this->saldo = $saldo + 150;
        }
        else{
           echo "O tipo informado não é válido!";
        }
        
        $this->dono = $dono;
        //Indica que a conta está aberta
        $this->status = true;
    }

    public function fecharConta(){
        if($this->status == false){
            echo "<pre>Esta conta já está fechada!</pre>";
        }
        else{
            if($this->tipo == "CC"){
                if($this->saldo != 0){
                    echo "<pre>Não é possível fechar a conta!</pre> <pre>Valor de $this->saldo reais em aberto!</pre>";
                }
                else{
                    $this->status = false;
                    echo"<pre>Conta de número: $this->numConta fechada com sucesso!</pre>";
                }
            }
            else{
                if($this->saldo > 0){
                    echo "<pre>Não é possível fechar a conta!</pre><pre>Valor de $this->saldo reais em aberto!</pre>";
                }
                else{
                    $this->status = false;
                    echo"<pre>Conta de número: $this->numConta fechada com sucesso!</pre>";
                }
            }  
        }
    }
    
    public function depositar($deposito){
        if($this->status == false){
            echo "<pre>Esta conta está fechada e não é possível depositar!";
        }
        else{
        $this->saldo = ($this->saldo + $deposito);
        echo "<pre>Depósito de $deposito reais efetuado com sucesso!</pre>";
        }   
     }
    
    public function sacar($saque){
        if($this->status == false){
            echo "<pre>Esta conta está fechada e não é possível sacar!";
        }
        else{
        if($this->saldo < $saque){
            echo "<pre>Você não pode efetuar o saque!</pre><pre>Valor indisponível!</pre>";
        }
        else{
            $this->saldo = ($this->saldo - $saque);
            echo "<pre>Saque de $saque reais efetuado com sucesso!</pre>";
        }
            
            echo "<pre>Valor atual em conta: $this->saldo reais.</pre>";
        }    
    }

    public function pagarMensal(){
        if($this->tipo == "CC" ){
            $this->saldo = ($this->saldo - 12);
            echo "<pre>Mensalidade de 12 reais cobrada com sucesso!</pre><pre>Saldo atual: $this->saldo.";
        }
        else{
            echo"<pre>Esta conta não possui mensalidade a ser cobrada!</pre>";
        }
    }
}
