<?php
    session_start();
    require_once 'cabecalho.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try{
            $email = $_POST['email'] ?? "";
            $senha = $_POST['senha'] ?? "";

            if ($email === "admin@admin.com" && $senha === "admin123"){ 
                $_SESSION['usuario_logado'] = $email; 
                header('Location: dashboard.php');
                exit();
            } else {
                $erro = "Usuário ou senha incorretos.";
            }
        }catch(Exception $e){
            echo "Erro: " . $e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <?php if (isset($erro)) { ?>
            <div class="alert alert-danger"><?php echo $erro; ?></div>
        <?php } ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
