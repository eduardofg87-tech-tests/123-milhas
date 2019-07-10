<?php

function equacaoDeSegundoGrau(int $a, int $b, int $c): string
{
    $delta = ($b * $b) - (4 * $a * $c); 
    switch($delta) {
        case 0:
            $resultado = "Delta é igual à 0, portanto as raízes são iguais:" . PHP_EOL; 
            $x = (-($b)) / (2 * $a); 
            $resultado.= "x': " . $x . PHP_EOL;
            $resultado.= "x'':" . $x . PHP_EOL;
            $resultado.= "Delta: " . $delta . PHP_EOL;
            return $resultado;
        break;
        case $delta > 0: 
            $resultado = "Delta é maior que 0, portanto há duas raízes diferentes:" . PHP_EOL;
            $x1 = intval( -($b) + sqrt($delta) / 2 * $a);
            $x2 = intval(-($b) - sqrt($delta) / 2 * $a);
            $resultado.= "x':" . $x1 . PHP_EOL;
            $resultado.= "x'':" . $x2 . PHP_EOL;
            $resultado.= "Delta:" . $delta . PHP_EOL;
            return $resultado;
        break;
        case $delta < 0: 
            $resultado = "Delta é menor que 0, portanto não há raízes reais" . PHP_EOL; 
            $resultado.= "Delta: " . $delta . PHP_EOL;
            return $resultado;
        break;
        default:
            throw new Exception('erro inesperado, saia correndo pois o circo está pegando fogo!');
        break;
    }
}

try {
   
    //TESTE 1
    $a1 = 1;
    $b1 = -4;
    $c1 = 5;
    //Delta é menor que 0, portanto não há raízes reais
    //Delta: -4
    echo equacaoDeSegundoGrau($a1, $b1, $c1) . PHP_EOL;
    
    //TESTE 2
    $a3 = 4;
    $b3 = -4;
    $c3 = 1;
    //Delta é igual à 0, portanto as raízes são iguais:
    //x': 4
    //x'': 4
    //Delta: 0
    echo equacaoDeSegundoGrau($a3, $b3, $c3) . PHP_EOL;
    
    //TESTE 3
    //x':5
    //x'':4
    //Delta:1
    $a2 = 1;
    $b2 = -5;
    $c2 = 6;    
    echo equacaoDeSegundoGrau($a2, $b2, $c2);
}
catch (Exception $e) {
    echo $e->msg();
}
?>