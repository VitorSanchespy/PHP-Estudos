<?php
abstract class ContaBancaria{
    private $numeroConta;
    private $nomeTitular;
    private $saldo = 0;
    public function getNomeroConta(){
        return $this->numeroConta;
    }
    public function getNomeTitular(){
        return $this->nomeTitular;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setNumeroConta($valor){
        $this->numeroConta = $valor;
    }
    public function setNomeTitular($valor){
        $this->nomeTitular = $valor;
    }
    public function setSaldo($valor){
        $this->saldo = $valor;
    }
    public function depositar($valor){
        $this->saldo += $valor;
        echo "Deposito realizado com sucesso! saldo: ". $this->saldo. ' <br>';
    }
    public function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
            echo "Saque efetuado com sucesso! saldo restante: ". $this->saldo. ' <br>'; 
        }else{
            echo "Saldo insuficiente para sacar <br>";
        }
    }

}

class ContaCorrente extends ContaBancaria{
    public function sacar($valor){
        $taxa = 0.5;
        $valorTaxado = $valor + ($valor * $taxa);
        if($valorTaxado <= $this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $valorTaxado);
            echo "Saque efetuado com sucesso! saldo restante: ". $this->getSaldo(). ' <br>'; 
        }else{
            echo "Saldo insuficiente para sacar <br>";
        }
    }
}

class contaPoupanca extends ContaBancaria{
    public function calcularJuros($valor, $juros, $meses){
        $resultado = ($valor * $juros * $meses) - ($valor  * $meses);
        echo 'Resultado do juros do mês: '. $resultado . '<br>';  
    }
}


$rogerao = new contaCorrente();
$rogerao->setNomeTitular('Rogerão Junior');
$rogerao-> depositar(1200);
$rogerao-> sacar(100);

$vitao = new contaPoupanca();
$vitao->setNomeTitular('Vitao Junior');
$vitao-> calcularJuros(1200, 1.5, 3);

?>