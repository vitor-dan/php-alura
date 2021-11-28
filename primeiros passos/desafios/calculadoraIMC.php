<?php

$peso = 100;
$altura = 1.80;

$resultado = $peso / pow($altura,2);

if ($resultado < 18.5){
    echo "Magreza";
}elseif ($resultado >= 18.5 && $resultado < 24.9){
    echo "Normal";
}elseif ($resultado >= 24.9 && $resultado < 30){
    echo "Sobrepeso";
}else{
    echo "Obesidade";
}
