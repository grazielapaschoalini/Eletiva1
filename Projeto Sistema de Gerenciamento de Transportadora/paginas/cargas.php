<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Cargas</h2>
    <a href="nova_carga.php" class="btn btn-primary">Nova Carga</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Peso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Grãos</td>
                <td>8000</td>
                <td>
                    <a href="editar_carga.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_carga.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>