<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once('../funcoes/cargas.php');

    $cargas = todasCargas();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Cargas</h2>
    <a href="nova_carga.php" class="btn btn-success mb-3">Nova Carga</a>
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>ID</th>    
                <th>Descrição</th>
                <th>Peso</th>
                <th>Valor</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cargas as $carga): ?>
                <tr>
                    <td><?= $carga['id'] ?></td>
                    <td><?= $carga['descricao'] ?></td>
                    <td><?= $carga['peso'] ?></td>
                    <td><?= $carga['valor'] ?></td>
                    <td><?= $carga['destino'] ?></td>
                    <td>
                        <a href="editar_carga.php?id=<?= $carga['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="excluir_carga.php?id=<?= $carga['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>