<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Novo Motorista</h2>
    <form action="novo_motorista.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="cnh" class="form-label">CNH</label>
            <input type="text" class="form-control" id="cnh" name="cnh" required>
        </div>
        <div class="mb-3">
            <label for="acoes" class="form-label">Ações</label>
            <input type="text" class="form-control" id="acoes" name="acoes" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
