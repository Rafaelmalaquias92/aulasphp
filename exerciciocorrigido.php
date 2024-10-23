<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>

</head>

<body>
    <h1>Exercício Corrigido PHP</h1>
<hr>
    <?php

    // Array NUMÉRICO/INDEXADO

    $dados1 = [

        "chapolin.colorado",

        "123teste",

        30,

        "São Paulo",

        ["11-2135-0300", "11-91234-5678"]

    ];
    ?>
    <?php

    // Array ASSOCIATIVO

    $dados2 = [

        "usuario" => "chapolin.colorado",

        "senha" => "123teste",

        "idade" => 30,

        "cidade" => "São Paulo",

        "telefones" => ["11-2135-0300", "11-98765-4321"]

    ];

    ?>
<h2>Versão de saída usando Array NUMERICO / INDEXADO</h2>
<ol>
<li>Nome: <?=$dados1[0]?> </1i>
<li>Idade: <?=$dados1[2]?> anos </li>
<li>Cidade: <?=$dados1[3]?></li>
<li>Celular: <?=$dados1[4][1]?> </1i>
</ol>
<hr>

<h2><p>Versão de saída usando Array ASSOCIATIVO</p></h2>

<ol>
        <li>Nome: <?=$dados2["usuario"]?></li>
        <li>Idade: <?=$dados2["idade"]?></li>
        <li>Cidade: <?=$dados2["cidade"]?></li>
        <li>Celular: <?=$dados2["telefones"][1]?> </li>
        
    </ol>
<hr>
</body>

</html>