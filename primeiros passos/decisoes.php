<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar a partir de 18 anos ou a partir de 16 anos acompanhado" .PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade. Pode entrar!";
} else if ($idade >= 16 and $numeroDePessoas > 1) {
    echo "Você tem $idade e está acompanhado! Pode entrar.";
} else {
    echo "Você tem $idade. Não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!";