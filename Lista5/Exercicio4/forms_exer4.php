<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrada de valore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Lista 05</h1>
      <h5>Exercício 04 - Cadastro de Itens e Aplicação de Imposto</h5>
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 3; $i++) : ?>
              <label for="nome" class="form-label">Nome do Produto:</label>
              <input type="text" name="nome[]" placeholder="Digite o nome" required>

              <label for="preco" class="form-label">Preço:</label>
              <input type="number" step="0.01" name="preco[]" placeholder="Digite o preço" required>
              <br>
            <?php endfor; ?>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>

      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST")
      {
        try 
        {
          $nomes = $_POST['nome'];
          $precos = $_POST['preco'];

          $itens = [];

          foreach ($nomes as $chave => $nome) 
          {
            $preco = floatval($precos[$chave]);
            $precoComImposto = $preco * 1.15;
            $itens[$nome] = $precoComImposto;
          }

          asort($itens);

          echo "<br><h5>Lista de Itens:</h5>";
          foreach ($itens as $nome => $preco) 
          {
            echo "<p><strong>Nome:</strong> $nome <br> <strong>Preço com Imposto (15%):</strong> R$ " . number_format($preco, 2, ',', '.') . "</p>";
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
