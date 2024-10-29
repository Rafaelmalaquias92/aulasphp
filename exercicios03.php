<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
.list-group-item:nth-child(odd) {
    color: blue;
}

.list-group-item:nth-child(even) {
    color: red;
}

    </style>
</head>
<body>

    <div>
        <h2 class="alert alert-danger">Exercicio 03</h2>
        <hr>
    <h2>Meses do Ano</h2>
    <ol class="list-group list-group-numbered" >
    <?php
    $meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outrubro","Novembro","Dezembro"];
    
    /*foreach( $meses as $mese){
        ?>
        <ol>
            <li>
        <p class="alert alert-danger">
            <?=$mese?>
        </p>
        </li>
        </ol>
        <?php
}
        */

        for($i = 0; $i < count($meses); $i++){
            ?>
            
                <li class="list-group-item"><?=$meses[$i]?></li>
         
            <?php
            }
            ?>



</ol>
    </div>
</body>
</html>