<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrada de Valores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Lista 05</h1>
      <h5>Exercício 01 - Cadastro de Contatos</h5>
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 5; $i++) : ?>
              <input type="text" name="nome[]" placeholder="Nome <?= $i + 1 ?>">
              <input type="tel" name="telefone[]" placeholder="Telefone  <?= $i + 1 ?>">
              <br>
            <?php endfor; ?> 
          </div>
        </div>
        <div class="row">
          <div class="col mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>

      <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            try {
                $nomes = $_POST['nome'];
                $telefones = $_POST['telefone'];

                $contatos = [];
                $duplicados = false;

                // para ver as duplocatas dos nomes e dos telefone
                foreach ($nomes as $chave => $nome) 
                {
                    $telefone = $telefones[$chave];

                    if (in_array($nome, array_keys($contatos))) 
                    {
                        echo "<p style='color: red;'>Erro: O nome '$nome' já foi cadastrado!</p>";
                        $duplicados = true;
                    }
                    if (in_array($telefone, $contatos)) 
                    {
                        echo "<p style='color: red;'>Erro: O telefone '$telefone' já foi cadastrado!</p>";
                        $duplicados = true;
                    }

                    if (!$duplicados) 
                    {
                        $contatos[$nome] = $telefone;
                    }
                    $duplicados = false; 
                }

                ksort($contatos); // ksort para ordenar os contatos por nome

                echo "<h5>Lista de Contatos:</h5>";
                foreach ($contatos as $nome => $telefone) {
                    echo "<p><strong>Nome:</strong> $nome <br> <strong>Telefone:</strong> $telefone</p>";
                }
            } catch(Exception $e) {
                echo "<p style='color: red;'>Erro: " . $e->getMessage() . "</p>";
            }
        }
    ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>

<!--Comentario aqui no HTML-->