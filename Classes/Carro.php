<?php
class Carro{
    public $marca, $modelo, $cor, $ano;

    public function ligar(){
        echo 'O carro da marca: '. $this->marca . ' modelo: '. $this->modelo .' cor: '. $this->cor . ' ano: '. $this->ano ;
    }
};

$carro = new Carro();
$carro-> marca='Chevrollet';
$carro-> modelo='S10';
$carro-> cor='Prata';
$carro-> ano=2019;
echo $carro->ligar()

?>