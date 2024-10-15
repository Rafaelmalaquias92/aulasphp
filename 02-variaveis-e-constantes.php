<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
    <h2>Declação e saida usando echo</h2>
<hr>
    <?php
    //Variaveis
    $curso = "Programador Web";
    $ano = 2024;
    $area = "Back-End";
//Saída Interpolada (usando aspas duplas)
    echo "<p>Estamos no $curso em $ano. </p>";
//Com aspas simples, PHP NÃO interpreta variavel
    echo '<p>Estamos no $curso em $ano. </p>';
//Constantes
define('AUTOR', 'Rafael'); // Tradicional,antiga
const EMPRESA = "ABC Tecnologia"; // Nova, moderna
echo "<p>".AUTOR." trabalha na empresa ".EMPRESA.".</p>"
?>
<h2>Saída de dados simplificados/direta</h2>
<hr>
<p>Estamos no <?=$curso?> em <?=$ano?> .</p>
<p> O <?=AUTOR?> trabalha na empresa <?=EMPRESA?> .</p>
</body>
</html>