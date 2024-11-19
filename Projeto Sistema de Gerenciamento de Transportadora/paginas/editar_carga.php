<?php
require_once 'cabecalho.php'; 
require_once 'navbar.php'; 
require_once '../funcoes/cargas.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: cargas.php");
    exit;
}

$carga = retornaCargaPorId((int)$id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $peso = $_POST['peso'];
    $valor = $_POST['valor'];
    $destino = $_POST['destino'];
    
    if (editarCarga((int)$id, $descricao, $peso, $valor, $destino)) {
        header("Location: cargas.php");
        exit;
    } else {
        echo "<p class='text-danger'>Erro ao editar carga!</p>";
    }
}
?>

<div class="container mt-5">
    <h2>Editar Carga</h2>
    <form method="post">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= $carga['descricao'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso:</label>
            <input type="number" step="0.01" id="peso" name="peso" class="form-control" value="<?= $carga['peso'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor:</label>
            <input type="number" step="0.01" id="valor" name="valor" class="form-control" value="<?= $carga['valor'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input type="text" id="destino" name="destino" class="form-control" value="<?= $carga['destino'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</body>

<?php require_once 'rodape.php'; ?>
