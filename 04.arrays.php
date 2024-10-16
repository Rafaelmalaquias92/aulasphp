<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduzindo Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Arrays no PHP</h1>
    <hr>

    <?php 
    // Array numerico/tradicional
    $genero = ["Rock","Rap","Reggae","Eletronica"];
    $evento = array("Balada","Pista","Bate cabeça")
    ?>

    <h2>Acessando os dados Arrays</h2>
    <p>Mateus é <?=$genero[2]?></p>
    <p>Mateus vai para <?=$evento[0]?></p>

    <hr>

    <?php
    
    // Array Associativo
    $filme = [
        //Chave associativa
        "titulo" => "Senhor do Aneis",
        "autor" => "J.R.R. Tolkien",
        "lancamento" => 2001,
        "genero" => "Fantasia"
    ];

    ?>

    <h2>Acessando os dados do Array Associativo</h2>

    <p>O Filme <?=$filme["titulo"]?> foi lançado em <?=$filme["lancamento"]?>.</p>

    <hr>
    <h2>Comandos úteis (para programadores)para Analise de Arrays</h2>
    <hr>
    <h3>print_r (nomeArray)</h3>
    <pre><?=print_r($genero)?></pre>
<hr>
    <h3>var_dump (nomeArray)</h3>
    <pre><?=var_dump($evento)?></pre>

    </div>
</body>
</html>