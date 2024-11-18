<?php
require_once('../funcoes/motoristas.php');

$motoristas = todosMotoristas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoristas</title>
</head>
<body>
    <h1>Motoristas Cadastrados</h1>
    <a href="novo_motorista.php">Cadastrar Novo Motorista</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($motoristas as $motorista): ?>
            <tr>
                <td><?= htmlspecialchars($motorista['nome']) ?></td>
                <td><?= htmlspecialchars($motorista['cpf']) ?></td>
                <td><?= htmlspecialchars($motorista['email']) ?></td>
                <td><?= htmlspecialchars($motorista['telefone']) ?></td>
                <td>
                    <a href="editar_motorista.php?id=<?= $motorista['id'] ?>">Editar</a>
                    <a href="excluir_motorista.php?id=<?= $motorista['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
