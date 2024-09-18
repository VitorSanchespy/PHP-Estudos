<?php
class produtos {
    private $nome;
    private $preco;
    private $qntEstoque;
    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($value){
        $this->preco = $value;
    }

    public function getQnt(){
        return $this->qntEstoque;
    }
    public function setQnt($value){
        $this->qntEstoque = $value;
    }

    public function calcularEstoque(){
        return $estoque = $this->preco * $this->qntEstoque;
    }

    public function exibir(){
        return array(
            'nome'=>$this->getNome(),
            'preco'=>$this->getPreco(),
            'qntEstoque'=>$this->getQnt(),
            'estoque'=>$this->calcularEstoque()
        );
    }
}


$produto = new produtos();
$produto->setNome('Rogerão');
$produto->setPreco(200);
$produto->setQnt(7);
print_r($produto->exibir())

?>