<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/motoristas.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: motoristas.php");
    exit;
}

$motorista = retornaMotoristaPorId((int)$id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cnh = $_POST['cnh'];
    $telefone = $_POST['telefone'];
    
    if (editarMotorista((int)$id, $nome, $cnh, $telefone)) {
        header("Location: motoristas.php");
        exit;
    } else {
        echo "<p class='text-danger'Erro ao editar motorista!</p>";
    }
}
?>

<div class="container mt-5">
    <h2>Editar Motorista</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?= $motorista['nome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="cnh" class="form-label">CNH:</label>
            <input type="text" id="cnh" name="cnh" class="form-control" value="<?= $motorista['cnh'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" value="<?= $motorista['telefone'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>

