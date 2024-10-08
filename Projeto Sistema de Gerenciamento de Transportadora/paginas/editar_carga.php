<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Editar Carga</h2>
    <form action="editar_carga.php?id=<?php echo $carga['id']; ?>" method="post">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $carga['descricao']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso(kg)</label>
            <input type="number" step="0.01" class="form-control" id="peso" name="peso" value="<?php echo $carga['peso']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
