<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Pontos</title>
    <style>
        <?php include 'style.css';?>
    </style>
</head>
<body>
<div class="container">
        <h1>Histórico de Pontos</h1>
        <?php if (count($_SESSION['reg']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['reg'] as $register): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($register['id']); ?></td>
                            <td><?php echo htmlspecialchars($register['nome']); ?></td>
                            <td><?php echo htmlspecialchars($register['tipo']); ?></td>
                            <td><?php echo htmlspecialchars($register['horario']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum ponto encontrado.</p>
        <?php endif; ?>
        <a href="/" class="link">Voltar</a>
    </div>
</body>
</html>