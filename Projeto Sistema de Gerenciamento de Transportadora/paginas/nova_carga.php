<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/cargas.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $descricao = $_POST['descricao'];
        $peso = floatval($_POST['peso']);
        $valor = floatval($_POST['valor']);
        $destino = $_POST['destino'];
        
        if (novaCarga($descricao, $peso, $valor, $destino)) {
            header('Location: cargas.php');
        } else {
            echo "<p class='text-danger'Erro ao cadastrar carga.</p>";
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Nova Carga</h2>
    <form method="post">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso:</label>
            <input type="number" step="0.01" id="peso" name="peso" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor:</label>
            <input type="number" step="0.01" id="valor" name="valor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input type="text" id="destino" name="destino" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Carga</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>