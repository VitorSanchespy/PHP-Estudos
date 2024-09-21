<?php
interface veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
};
class carro implements veiculo {
    private $velocidade = 0;
    private $marcha = 0;
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setVelocidade($valor){
        $this->velocidade = $valor;
    }//
    public function getMarcha(){
        return $this->marcha;
    }
    public function setMarcha($valor){
        $this->marcha = $valor;
    }
    public function acelerar($velocidade){
        $this->velocidade = $velocidade;
        echo 'O carro acelerou até: '. $this->velocidade. '</br>';
    }
    public function freiar($velocidade){
        $this->velocidade = $velocidade;
        echo 'O carro freiou até: '. $this->velocidade. '</br>';
    }
    public function trocarMarcha($marcha){
        if($marcha <= 5){
        $this->marcha = $marcha;
        echo 'O carro trocou de marcha para: '. $this->marcha. '</br>';
        }else{
            echo 'Esse numero de marcha não tem no Carro </br>';
        }
    }

};
class bicecleta implements veiculo {
    private $velocidade = 0;
    private $marcha = 0;
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setVelocidade($valor){
        $this->velocidade = $valor;
    }//
    public function getMarcha(){
        return $this->marcha;
    }
    public function setMarcha($valor){
        $this->marcha = $valor;
    }
    public function acelerar($velocidade){
        $this->velocidade = $velocidade;
        echo 'A bicecleta acelerou até: '. $this->velocidade. '</br>';
    }
    public function freiar($velocidade){
        $this->velocidade = $velocidade;
        echo 'A bicecleta freiou até: '. $this->velocidade. '</br>';
    }
    public function trocarMarcha($marcha){
        $this->marcha = $marcha;
        echo 'A bicecleta trocou de marcha para: '. $this->marcha. '</br>';
    }
}



$civic2019 = new carro();
$civic2019->trocarMarcha(10);
$monark = new bicecleta();
$monark-> acelerar(10);
$monark-> freiar(1);
?>