<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/motoristas.php';

    $motoristas = todosMotoristas();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Motoristas</h2>
    <a href="novo_motorista.php" class="btn btn-success mb-3">Novo Motorista</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNH</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motoristas as $motorista): ?>
                <tr>
                    <td><?= $motorista['id'] ?></td>
                    <td><?= $motorista['nome'] ?></td>
                    <td><?= $motorista['cnh'] ?></td>
                    <td><?= $motorista['telefone'] ?></td>
                    <td>
                        <a href="editar_motorista.php?id=<?= $motorista['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="excluir_motorista.php?id=<?= $motorista['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
