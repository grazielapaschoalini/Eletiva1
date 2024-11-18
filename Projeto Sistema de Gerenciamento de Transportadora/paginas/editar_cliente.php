<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/clientes.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: clientes.php");
    exit;
}

$cliente = retornaClientePorId((int)$id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    if (editarCliente((int)$id, $nome, $cpf, $email, $telefone)) {
        header("Location: clientes.php");
        exit;
    } else {
        echo "<p class='text-danger'>Erro ao editar cliente!</p>";
    }
}
?>

<div class="container mt-5">
    <h2>Editar Cliente</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $cliente['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $cliente['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $cliente['telefone']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>

