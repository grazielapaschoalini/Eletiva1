<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Motorista</h2>
    <p>Tem certeza de que deseja excluir o Motorista abaixo?</p>
    <ul>
        <li><strong>ID:</strong> </li>
        <li><strong>Nome:</strong> </li>
        <li><strong>CNH:</strong> </li>
        <li><strong>Tipo:</strong> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="motorista.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
