<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta</title>
  </head>
  <body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            try
            {
                $valor = (int) $_POST['valor'] ?? 0; //colacencia nula
                if ($valor > 0)
                {
                    echo "Valor Positivo";
                }
                elseif ($valor < 0)
                {
                    echo "Valor negativo";
                }
                else
                {
                    echo "Valor informado é igual a zero!";
                }
            } catch(Exception $e)
            {
                echo "Erro: " .$e->getMessage();
            }
        }
    ?>
  </body>
</html>