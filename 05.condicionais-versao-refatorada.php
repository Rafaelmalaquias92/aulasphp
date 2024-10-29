<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<H1>Comandos condicionais no PHP</H1>
<p>(Versão Refatorada)</p>
<hr>
<h2>Condicional SIMPLES</h2>
<?php
$numero = 500;

if($numero >= 100) {
echo "<p>O valor da variável é $numero</p>";
}
?>

<hr>

<h2>Condicional COMPOSTA</h2>
<?php

$produto = "ultrabook";
$qtdemestoque = 2;
$qtdcritica = 3;
?>

    <h3>Produto:<?=$produto?></h3>
    <p><b>Estoque:</b><?=$qtdemestoque?></p>
<hr>
<?php

/* Se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir pra repor. */
 
if($qtdemestoque < $qtdcritica){
    ?>
   <p style='alert alert-danger'>É nescessario repor!</p>
<?php 
} else {
?>
     <!--Caso contrário, simplesmente avisar que o estoque está normal. -->
     <p style='color.blue'>Estoque normal.</p>
<?php
}

?>
<hr>
<h2>Condicional ENCADEADA</h2>
<?php

/* Verificando o produto e determinando diferentes periodos de garantia (em anos).*/
if($produto =="ultrabook"){
    $garantia = 5;
} elseif($produto == "geladeira"){
    $garantia = 3;
} elseif($produto == "tv"){
    $garantia = 2;
} else {
    $garantia = 1;
}

?>
<p><?=$produto?> Tem garantia de <b><?=$garantia?> anos</b></p>
<hr>
<h2>Condicional ENCENADA usando switch/case</h2>
<?php
 
switch($produto) { 
    case "Ultrabook": $garantiaB = 5; break; 
    case "Geladeira": $garantiaB = 3; break; 
    case "TV": $garantiaB = 2; break; 
    default: $garantiaB = 1; break;
}
?> 
<p>Garantia de <?=$garantiaB?> anos.</p>

<?php include "redes.sociais.html" ?>
</div>
</body>
</html>