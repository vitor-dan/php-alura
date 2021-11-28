<?php

include 'funcoes.php';

$contasCorrentes = [
    '123.145.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

/*$contasCorrentes['123.145.789-10']['saldo'] = depositar($contasCorrentes['123.145.789-10'], 500);
$contasCorrentes['123.256.789-12']['saldo'] = sacar($contasCorrentes['123.256.789-12'], 500);*/

unset($contasCorrentes['123.456.689-11']);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <hr>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt><?= $conta['titular'];?> - <?= $cpf ?></dt>
        <dd>Saldo: <?= $conta['saldo'];?></dd>
        <?php } ?>
    </dl>
</body>
</html>
