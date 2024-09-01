<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrada de valores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
  <h1>Lista 03</h1>
  <h5>Exercício 01 - Digite 07 números diferentes</h5>
  <form action="exer1resp.php" method="POST">
    <div class="row">
      <div class="col">
        <label for="valor1" class="form-label">Valor 1: </label>
        <input type="number" class="form-control" name="valor1" id="valor1">
      </div>
      <div class="col">
        <label for="valor2" class="form-label">Valor 2: </label>
        <input type="number" class="form-control" name="valor2" id="valor2">
      </div>
      <div class="col">
        <label for="valor3" class="form-label">Valor 3: </label>
        <input type="number" class="form-control" name="valor3" id="valor3">
      </div>
      <div class="col">
        <label for="valor4" class="form-label">Valor 4: </label>
        <input type="number" class="form-control" name="valor4" id="valor4">
      </div>
      <div class="col">
        <label for="valor5" class="form-label">Valor 5: </label>
        <input type="number" class="form-control" name="valor5" id="valor5">
      </div>
      <div class="col">
        <label for="valor6" class="form-label">Valor 6: </label>
        <input type="number" class="form-control" name="valor6" id="valor6">
      </div>
      <div class="col">
        <label for="valor7" class="form-label">Valor 7: </label>
        <input type="number" class="form-control" name="valor7" id="valor7">
      </div>
    </div>
    <div class="row">
      <div class="col mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>