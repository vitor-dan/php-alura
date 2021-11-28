<?php
    $animais = [
        "Teddy" => [
            "tipo" => "Cachorro",
            "raca" => "Pincher",
            "adotando" => "Sim"
        ],
        "Paçoca" => [
            "tipo" => "Hamster",
            "raca" => "Não definido",
            "adotando" => "Não"
        ],
        "Billy" => [
            "tipo" => "Cachorro",
            "raca" => "Pastor Alemão",
            "adotando" => "Não"
        ],
        "Rick" => [
            "tipo" => "Gato",
            "raca" => "Não definido",
            "adotando" => "Sim"
        ]
    ];


?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pet Shop</title>
    <style>
        .cards-container{
            float: left;
        }
        li{
            list-style: none;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>Pet Shop</h1>
    <hr>
    <h2>Animais: </h2>
    <div class="cards-container">
    <?php foreach ($animais as $nome => $animal){?>
            <div class="card" style="margin-bottom: 50px; width: 18rem;display: inline-block">
                <div class="card-body">
                    <h3><?= $nome ?></h3>
                    <ol>
                        <li>Tipo: <?= $animal['tipo'] ?></li>
                        <li>Raça: <?= $animal['raca']?></li>
                        <li>Adotando: <?= $animal['adotando']?></li>
                    </ol>
                </div>
            </div>
        <?php }?>
    </div>

</div>
</body>
</html>
