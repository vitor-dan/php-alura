<?php
function exibeMensagem($mensagem) {
    echo $mensagem . "<br>";
}

function sacar(array $conta, float $valorASacar) : array{
    if ($valorASacar > $conta['saldo']) {
        echo "Você não pode sacar $valorASacar! Saldo insuficiente!";
    } else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar){
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }
    else{
        echo "Os depósitos precisam ser positivos". PHP_EOL;
    }

    return $conta;
}

function titularComLetrasMaiusculas(array $conta){
    $conta['tituar'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ["titular" => $titular, "saldo" => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}