<?php
    session_start();
    if(!isset($_SESSION['acesso'])){
        header('Location: login.php');
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Sistema de Gerenciamento de Transportadora</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

            <?php
                if ($_SESSION['nivel'] == 'adm'):
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuários
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="usuarios.php">Gerenciar</a></li>
                    </ul>
                </li>
            <?php
                endif;
            ?>  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="clientes.php">Gerenciar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Motoristas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="motorista.php">Gerenciar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cargas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cargas.php">Gerenciar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Entregas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="entregas.php">Gerenciar</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seja bem vindo(a) 
                    <?php
                      if(isset($_SESSION['usuario']))
                      echo $_SESSION['usuario'];
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="editar_usuario.php">Editar dados</a></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
