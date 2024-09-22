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
      <h5>Exercício 05 - Verificação de Estoque</h5>
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 3; $i++) : ?>
              <label for="titulo" class="form-label">Título do Livro:</label>
              <input type="text" name="titulo[]" placeholder="Digite o título" required>

              <label for="estoque" class="form-label">Quantidade em Estoque:</label>
              <input type="number" name="estoque[]" placeholder="Quantidade" required>
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
          $titulos = $_POST['titulo'];
          $estoques = $_POST['estoque'];
          $livros = [];

          foreach ($titulos as $chave => $titulo) 
          {
            $estoque = intval($estoques[$chave]);
            $livros[$titulo] = $estoque;
          }

          ksort($livros);

          echo "<br><h5>Lista de Livros:</h5>";
          foreach ($livros as $titulo => $estoque) 
          {
            echo "<p><strong>Título:</strong> $titulo <br> <strong>Estoque:</strong> $estoque</p>";

            if ($estoque < 5) 
            {
              echo "<p style='color: red;'>Alerta: O livro '$titulo' está com estoque baixo!</p>";
            }
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

