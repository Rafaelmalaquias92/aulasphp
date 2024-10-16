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

    </div>
</body>
</html>