<?php
class Aritmetica{
    function suma($x, $y){
        return $x + $y;
    }

    function diferenta($x, $y){
        return $x - $y;
    }
}


class Matematica{
    function diferenta($x, $y){
        return $x - $y + 1;
    }
}

$aritmetica = new Aritmetica();
$matematica = new Matematica();

$suma = $aritmetica->suma(2, 3);
echo $suma;
echo $aritmetica->diferenta(7, 3);
echo $matematica->diferenta(7, 3);