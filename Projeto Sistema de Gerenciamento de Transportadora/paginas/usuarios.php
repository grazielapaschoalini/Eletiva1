<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/usuarios.php';

    $usuarios = todosUsuarios();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Usuários</h2>
    <a href="novo_usuario.php" class="btn btn-success mb-3">Novo Usuário</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Nível</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../funcoes/usuarios.php';
            $usuarios = todosUsuarios();
            foreach ($usuarios as $usuario):
            ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td><?= $usuario['senha']; ?></td>
                <td><?= $usuario['nivel']; ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?= $usuario['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_usuario.php?id=<?= $usuario['id']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
