<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/clientes.php'; 

    $clientes = todosClientes();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Clientes</h2>
    <a href="novo_cliente.php" class="btn btn-success mb-3">Novo Cliente</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id'] ?></td>
                <td><?= $cliente['nome'] ?></td>
                <td><?= $cliente['cpf'] ?></td>
                <td><?= $cliente['email'] ?></td>
                <td><?= $cliente['telefone'] ?></td>
                <td>
                    <a href="editar_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_cliente.php?id=<?= $cliente['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>

