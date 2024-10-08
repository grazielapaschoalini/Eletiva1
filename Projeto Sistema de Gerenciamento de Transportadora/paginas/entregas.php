<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Entregas</h2>
    <a href="nova_entrega.php" class="btn btn-primary">Nova Entrega</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Motorista</th>
                <th>Carga</th>
                <th>Data de Entrega</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Entrega 1</td>
                <td>
                    <a href="editar_entregas.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_entregas.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
