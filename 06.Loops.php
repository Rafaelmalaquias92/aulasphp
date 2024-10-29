<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Loops (ou laços de repetição) </h1>
        
        <hr>
        
        <h2>Tradicionais: while, for, do/while</h2>
        <hr>
        <h3>While</h3>
        <?php
        //Variável de controle da repetição
        $i = 1;
        while($i <= 10){
        ?>
        <p>Senac Penha - <?=$i?></p>
        <?php
        // Atualizando/incremento a variável
        $i++;
}
?>
    <hr>
    <h3>For</h3>
    <?php
    for($i = 1; $i <= 5; $i++){
?>
<div>
    <h4>Foto <?=$i?></h4>
    <img src="https://picsum.photos/id/1/300/200" alt="">
</div>
<?php
    }
    ?>
    <hr>

    <h3>Loop tradicional para acessar Arrays</h3>
    <?php
    $alunos = ["Roney","Adriano","Maria","Silas","Malaquias"];

    for($i = 0; $i < count($alunos); $i++){
    ?>
    <p class="alert alert-success">
        <?=$alunos[$i]?>
    </p>
    <?php
    }
    ?>
        <hr>
        <h2>Específico: Foreach</h2>
        <?php
        foreach( $alunos as $alunos){
            ?>
            <p class="alert alert-danger">
                <?=$alunos?>
            </p>
            <?php
    }
    ?>

    </div>
</body>

</html>