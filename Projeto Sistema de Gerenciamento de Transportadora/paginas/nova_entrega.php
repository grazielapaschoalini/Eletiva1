<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/entregas.php';
    require_once '../funcoes/clientes.php';
    require_once '../funcoes/motoristas.php';
    require_once '../funcoes/cargas.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente_id = (int)$_POST['cliente_id'];
        $motorista_id = (int)$_POST['motorista_id'];
        $carga_id = (int)$_POST['carga_id'];
        $data_entrega = $_POST['data_entrega'];
        
        if (novaEntrega($cliente_id, $motorista_id, $carga_id, $data_entrega)) {
            header('Location: entregas.php');
        } else {
            echo "<p class='text-danger'>Erro ao registrar entrega!</p>";
        }
    }

    $clientes = todosClientes();
    $motoristas = todosMotoristas();
    $cargas = todasCargas();
?>

<div class="container mt-5">
    <h2>Cadastrar Nova Entrega</h2>
    <form method="post">
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente:</label>
            <select id="cliente_id" name="cliente_id" class="form-select" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?= $cliente['id'] ?>"><?= $cliente['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="motorista_id" class="form-label">Motorista:</label>
            <select id="motorista_id" name="motorista_id" class="form-select"  required>
                <?php foreach ($motoristas as $motorista): ?>
                    <option value="<?= $motorista['id'] ?>"><?= $motorista['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="carga_id" class="form-label">Carga:</label>
            <select id="carga_id" name="carga_id" class="form-select"  required>
                <?php foreach ($cargas as $carga): ?>
                    <option value="<?= $carga['id'] ?>"><?= $carga['descricao'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="data_entrega" class="form-label">Data de Entrega:</label>
            <input type="date" id="data_entrega" name="data_entrega" class="form-control"  required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Salvar Entrega</button>
            <div>
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
                <button type="button" class="btn btn-light" onclick="history.back();">Voltar</button>
            </div>
        </div>
    </form>
</div>

<?php require_once 'rodape.php'; ?>