<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>

</head>
<body>
    <h1>Exercício PHP</h1>
<?php
$dados = [
        "NOME" => "Rafael malaquias",
        "SENHA" => "ATECUBANOS",
        "IDADE" => 30,
        "CIDADE" => "São Paulo",
        "TELEFONE" => ["11954331279","25534399"]
        ]
        ?>
<ol>
        <li><?=$dados["NOME"]?></li>
        <li><?=$dados["IDADE"]?></li>
        <li><?=$dados["CIDADE"]?></li>
        <li><?=$dados["TELEFONE"][1]?></li>
        
    </ol>

</body>
</html>