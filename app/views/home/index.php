
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto Eletrônico</title>
    <style>
        <?php include 'style.css';?>
    </style>
</head>
<body>
<div class="container">
        <h1>Ponto Eletrônico</h1>
        <?php if (isset($mensagem)) echo "<p class='success'>$mensagem</p>"; ?>
        <?php if (isset($erro)) echo "<p class='error'>$erro</p>"; ?>
        <form method="POST" action="/">
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <button type="submit" name="tipo" value="entrada">Marcar Entrada</button>
            <button type="submit" name="tipo" value="saida">Marcar Saída</button>
        </form>
        <a href="/historico" class="link">Ver Histórico</a>
    </div>
</body>
</html>