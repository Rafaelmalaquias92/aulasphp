<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (formulário)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Exercício 04 (formulário)</h1>
    <hr>
    <form autocomplete="off" action="exercicio04-processamento.php" method="post" target="_blank">
        <p>
            <label for="produto">Produto:</label>
            <input required type="text" name="produto" id="produto">
        </p>
     
		<p>
			<label for="fabricante">Fabricante:</label>
			<select name="fabricante" id="fabricante">
				
				<option value="<?=$fabricante?>"></option>
				
				<?php
            $fabricantes = ['HP', 'Microsoft', 'Samsung', 'LG'];
            foreach ($fabricantes as $fabricante) {
                echo "<option value=\"$fabricante\">$fabricante</option>";
            }
            ?>
                
			</select>
		</p>

		<p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>