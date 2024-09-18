<?php
$meuArray = array(
    'inteiro' => 10,
    'real' => 1.5,
    'strings' => 'Teste 1, 2, 3',
    'verdadeiro' => true,
);

function monstarValor($array){
    foreach ($array as $key => $value) {
        echo "Variável: $key E do tipo: ". gettype($value). '<br>';
    }
};


/** 
* função para adicionar no array
* function adicionar($valor){
*    $meuArray = array();
*    array_push($meuArray, $valor);
*    return $meuArray;
* }
*/

monstarValor($meuArray)

?>