<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/usuarios.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: usuarios.php");
    exit;
}

$usuario = retornaUsuarioPorId((int)$id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivel = $_POST['nivel'];

    if (editarUsuario((int)$id, $nome, $email, $nivel)) {
        header("Location: usuarios.php");
        exit;
    } else {
        echo "<p class='text-danger'>Erro ao editar usuário!</p>";
    }
}
?>

<div class="container mt-5">
    <h2>Editar Usuário</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $usuario['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $usuario['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nível</label>
            <select name="nivel" id="nivel" class="form-control" required>
                <option value="adm" <?= $usuario['nivel'] == 'adm' ? 'selected' : ''; ?>>Administrador</option>
                <option value="comum" <?= $usuario['nivel'] == 'comum' ? 'selected' : ''; ?>>Comum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
