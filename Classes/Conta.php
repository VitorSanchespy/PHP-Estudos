<?php
class ContaB{
    public $titular, $saldo;
    
    public function verSaldo(){
        echo 'Seu saldo é: '. $this->saldo;
    }

    function depositar($valor){
        $this->saldo += $valor ;
        $this->verSaldo();
    }
    
    function sacar($valor){
        $this->saldo -= $valor;
        $this->verSaldo();
    }
   
};


$minhaConta = new ContaB();
$minhaConta-> titular ='Vitor';
$minhaConta-> saldo = 123;
$minhaConta->sacar(3);
$minhaConta->depositar(200);


?>