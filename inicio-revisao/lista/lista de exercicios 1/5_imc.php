<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}

// Valores de teste
$peso = 90;
$altura = 1.60;

// Calculando o IMC
$imc = calcularIMC($peso, $altura);

echo "IMC: $imc <br>";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
    echo "Classificação: Peso normal";
} elseif ($imc < 35) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}
