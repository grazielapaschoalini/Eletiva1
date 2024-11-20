<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/clientes.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        if (novoCliente($nome, $cpf, $email, $telefone)) {
            header('Location: clientes.php');
        } else {
            echo "<p class='text-danger'>Erro ao salvar cliente.</p>";
        }
    }
?>

<div class="container mt-5">
    <h2>Cadastrar Novo Cliente</h2>
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Salvar Cliente</button>
            <div>
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
                <button type="button" class="btn btn-light" onclick="history.back();">Voltar</button>
            </div>
        </div>
    </form>
</div>

<?php require_once 'rodape.php'; ?>

