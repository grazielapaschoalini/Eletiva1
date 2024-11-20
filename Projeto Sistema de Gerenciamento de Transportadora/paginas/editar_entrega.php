<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once 'banco.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "SELECT * FROM entregas WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $entrega = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$entrega) {
            echo "Entrega não encontrada!";
            exit;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente_id = $_POST['cliente_id'];
        $motorista_id = $_POST['motorista_id'];
        $carga_id = $_POST['carga_id'];
        $data_entrega = $_POST['data_entrega'];
        
        $sql = "UPDATE entregas SET cliente_id = ?, motorista_id = ?, carga_id = ?, data_entrega = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$cliente_id, $motorista_id, $carga_id, $data_entrega, $id])) {
            header('Location: entregas.php');
        } else {
            echo "Erro ao atualizar a entrega!";
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Entrega</h2>

    <form action="editar_entrega.php?id=<?= $id ?>" method="POST">
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" id="cliente_id" required>
                <?php
                    $sql = "SELECT id, nome FROM clientes";
                    $stmt = $pdo->query($sql);
                    while ($cliente = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $selected = $cliente['id'] == $entrega['cliente_id'] ? 'selected' : '';
                        echo "<option value='{$cliente['id']}' $selected>{$cliente['nome']}</option>";
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="motorista_id" class="form-label">Motorista</label>
            <select class="form-select" name="motorista_id" id="motorista_id" required>
                <?php
                    $sql = "SELECT id, nome FROM motoristas";
                    $stmt = $pdo->query($sql);
                    while ($motorista = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $selected = $motorista['id'] == $entrega['motorista_id'] ? 'selected' : '';
                        echo "<option value='{$motorista['id']}' $selected>{$motorista['nome']}</option>";
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="carga_id" class="form-label">Carga</label>
            <select class="form-select" name="carga_id" id="carga_id" required>
                <?php
                    $sql = "SELECT id, descricao FROM cargas";
                    $stmt = $pdo->query($sql);
                    while ($carga = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $selected = $carga['id'] == $entrega['carga_id'] ? 'selected' : '';
                        echo "<option value='{$carga['id']}' $selected>{$carga['descricao']}</option>";
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_entrega" class="form-label">Data de Entrega</label>
            <input type="date" class="form-control" id="data_entrega" name="data_entrega" value="<?= $entrega['data_entrega'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Entrega</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
