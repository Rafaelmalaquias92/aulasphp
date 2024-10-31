<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamneto</title>
</head>
<body>
    <h1>Processamento do dados vindos do Formulario HTML</h1>
    <hr>
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $mensagem = $_POST["mensagem"];

    if ( empty($nome) || empty($email)){
    ?>
    <p style="color: red;"> Você DEVE preencher <b>nome e <b>e-mail</b></b>!</p>
    <?php
    } else{
        ?>


    <h2>Dados Recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <?php if( !empty($nascimento)){ ?>
        <li>Nascimento: <?=$nascimento?></li>
        <?php } ?>

        <?php if( !empty($mensagem)){ ?>

        <li> Mensagem: <?= $mensagem?></li>
        <?php } ?>
    </ul>
    <?php } ?>
</body>
</html>