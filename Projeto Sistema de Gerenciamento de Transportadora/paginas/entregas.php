<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/entregas.php';

    $entregas = todasEntregas();
?>

<div class="container mt-5">
    <h2>Gerencimanto de Entregas</h2>
    <a href="nova_entrega.php" class="btn btn-success mb-3">Nova Entrega</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Motorista</th>
                <th>Carga</th>
                <th>Data de Entrega</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregas as $entrega): ?>
                <tr>
                    <td><?= $entrega['id'] ?></td>
                    <td><?= $entrega['cliente'] ?></td>
                    <td><?= $entrega['motorista'] ?></td>
                    <td><?= $entrega['carga'] ?></td>
                    <td><?= $entrega['data_entrega'] ?></td>
                    <td>
                        <a href="excluir_entrega.php?id=<?= $entrega['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
