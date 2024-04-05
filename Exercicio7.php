<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);

    return $imc;
}

$peso = 50;
$altura = 1.55;
$imc = calcularIMC($peso, $altura);

echo "Seu IMC é: $imc";

?>