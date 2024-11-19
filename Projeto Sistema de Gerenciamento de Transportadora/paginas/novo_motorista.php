<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/motoristas.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $cnh = $_POST['cnh'];
        $telefone = $_POST['telefone'];
        
        if (novoMotorista($nome, $cnh, $telefone)) {
            header('Location: motoristas.php');
        } else {
            echo "<p class='text-danger'>Erro ao cadastrar motorista.</p>";
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Novo Motorista</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cnh">CNH:</label>
            <input type="text" id="cnh" name="cnh" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Motorista</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
