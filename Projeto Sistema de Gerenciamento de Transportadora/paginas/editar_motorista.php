<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'
?>

<div class="container mt-5">
    <h2>Editar Motorista</h2>
    <form action="editar_motorista.php?id=<?php echo $motorista['id']; ?>" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $motorista['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="cnh" class="form-label">CNH</label>
            <input type="text" class="form-control" id="cnh" name="cnh" value="<?php echo $motorista['cnh']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $motorista['tipo']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
