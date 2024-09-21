<?php
abstract class funcionario{
    private $nome;
    private $salario;
    public function getNome(){
        return $this->nome ;
    }
    public function getSalario(){
        return $this->salario ;
    }
    public function setNome($valor){
        $this->nome = $valor ;
    }
    public function setSalario($valor) {
        $this->salario = $valor;
    }
    public function bonusSalario($valor, $bonus){
        return  $valor + ($valor * ($bonus / 100)) ;
    }
}
class Gerente extends Funcionario {
    public function setSalario($valor) {
        $salarioComBonus = $this->bonusSalario($valor, 10);
        parent::setSalario($salarioComBonus) ;
    }
}

class Vendedor extends Funcionario {
    public function setSalario($valor) {
        $salarioComBonus = $this->bonusSalario($valor, 5);
        parent::setSalario($salarioComBonus);
    }
}

$gerente = new Gerente();
$gerente->setNome("Carlos");
$gerente->setSalario(5000);
echo "Nome: " . $gerente->getNome() . " - Salário com bônus: " . $gerente->getSalario() . "<br>";

$vendedor = new Vendedor();
$vendedor->setNome("João");
$vendedor->setSalario(3000);
echo "Nome: " . $vendedor->getNome() . " - Salário com bônus: " . $vendedor->getSalario() . "<br>";
?>