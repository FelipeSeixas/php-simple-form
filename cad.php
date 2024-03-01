<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Primeiro passo com sucesso!</h1>
        <h1>Estamos analisando o seu cadastro.</h1>

    </header>    
    <main>
        <?php 
        $nomeUsuario = $_GET["nomeForm"] ?? " ";
        $sobreNome = $_GET["sobrenomeForm"] ??" ";

        echo "<p>Bem vindo, $nomeUsuario $sobreNome!";

        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>

    </main>
</body>
</html>