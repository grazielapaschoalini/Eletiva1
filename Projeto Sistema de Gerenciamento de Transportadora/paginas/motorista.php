<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Motoristas</h2>
    <a href="novo_motorista.php" class="btn btn-primary">Novo Motorista</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNH</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Marcos Luis Cesco</td>
                <td>475288</td>
                <td>Cargas Perigosas</td>
                <td>
                    <a href="editar_motorista.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_motorista.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>