<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Gerenciamento de Clientes</h2>
    <a href="novo_cliente.php" class="btn btn-primary">Novo Cliente</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Usuario</td>
                <td>usuario@gmail.com</td>
                <td>Administrador</td>
                <td>
                    <a href="editar_cliente.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_cliente.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
<?php require_once 'rodape.php'; ?>
