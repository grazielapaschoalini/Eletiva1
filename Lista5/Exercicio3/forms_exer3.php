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
      <h5>Exercício 03 - Cadastro e Aplicação de Desconto</h5>
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 5; $i++) : ?>
              <label for="codigo" class="form-label">Código do Produto:</label>
              <input type="text" name="codigo[]" placeholder="Digite o código" required>
              
              <label for="nome" class="form-label">Nome do Produto:</label>
              <input type="text" name="nome[]" placeholder="Digite o nome" required>
              
              <label for="preco" class="form-label">Preço:</label>
              <input type="number" name="preco[]" step="0.01" placeholder="Digite o preço" required>
              <br>
            <?php endfor; ?>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <br>
          </div>
        </div>
      </form>

      <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
          try 
          {
            $codigos = $_POST['codigo'];
            $nomes = $_POST['nome'];
            $precos = $_POST['preco'];

            $produtos = [];

            foreach ($codigos as $chave => $codigo) 
            {
              $nome = $nomes[$chave];
              $preco = floatval($precos[$chave]);

              if ($preco > 100.00) 
              {
                $preco = $preco * 0.90;
              }

              $produtos[] = 
              [
                'codigo' => $codigo,
                'nome' => $nome,
                'preco' => $preco
              ];
            }

            usort($produtos, function($a, $b) 
            {
              return strcmp($a['nome'], $b['nome']);
            });

            echo "<br><h5>Lista de Produtos:</h5>";
            foreach ($produtos as $produto) 
            {
              echo "<p><strong>Código:</strong> " . $produto['codigo'] . "<br>";
              echo "<strong>Nome:</strong> " . $produto['nome'] . "<br>";
              echo "<strong>Preço:</strong> R$ " . number_format($produto['preco'], 2, ',', '.') . "</p>";
            }
          } 
          
          catch (Exception $e) 
          {
            echo "<p style='color: red;'>Erro: " . $e->getMessage() . "</p>";
          }
        }
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
