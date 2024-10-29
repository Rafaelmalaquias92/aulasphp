<?php include "recursos-externos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML & PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

</style>
<body>
    <h1>Revisando o básico</h1>
    <hr>
    <ul>
        <?php foreach($marcas as $marca) {?>
        <li> <?=$marca?> </li>
        <?php }?>
    </ul>
    <?php 
    /* Criar duas Variavies e/ou Constant */
    const NOME = "Rafael Malaquias";
    $idade = 31;
    /* Exibir no HTML uma Frase da seguinte forma */

    // Olá! Meu nome é Rafael Malaquias e tenho 25 anos.

    /* Desafios */
    /* O nome deve aparecer em italico e com cor diferente no texto a idade deve aparecer apenas com cor de fundo diferente*/
    ?>
    <h2>Olá! Meu nome é <i class="text-danger"><?=NOME?></i> e tenho <span class="bg-danger"><?=$idade?></span> anos.</h2>
<p class="bg-rainbonw">
    🐸 ATECUBANOS 🐸
</p>
</body>
</html>