<?php
abstract class Animais{
    function falar(){
        return 'Som';
    }
}

class cachorro extends Animais {
    function falar(){
        return 'Latido';
    }
}

class gato extends Animais {
    function falar(){
        return 'Mia';
    }
}


$cachorro = new cachorro();
echo $cachorro->falar(). '<br>';

$gato = new gato();
echo $gato -> falar();



?>