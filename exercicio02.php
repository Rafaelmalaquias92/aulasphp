<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Ajuste Salarial</h1>
    <?php

    $salario = 989.55;


    if ($salario <= 500) {
        $salarioajustado = $salario * 1.15;
    } elseif ($salario <= 1000) {
        $salarioajustado = $salario * 1.10;
    } else {
        $salarioajustado = $salario * 1.05;
    }

    ?>
    <p>Salário Antigo: <b> R$ <?= $salario ?>.</b></p><p>Salário Reajustado: <b>R$ <?= $salarioajustado ?>.</b></p>
    <hr>
<p>Salário Antigo:<b> R$
    <?=number_format($salario, 2, ",",".")?>.</b>
</p>
<p>Salário Ajustado: <b> R$
   <?=number_format($salarioajustado, 2, ",",".")?>.</b>
</p>
    <hr>

</body>

</html>