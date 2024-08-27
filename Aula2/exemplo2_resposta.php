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
                switch($valor)
                {
                    case 10:
                        echo "Nota A";
                        break;
                    case 9:
                        echo "Nota B";
                        break;
                    case 8:
                        echo "Nota C";
                        break;
                    case 7:
                        echo "Nota D";
                        break;
                    default:
                        echo "Nota E";
                }

                $dado = 1;
                $dado = ($dado >= 1) ? "Sim" : "Não"; //operador ternário - testar uma condição para devolver um valor
                /*senão poderia escrever assim:
                if ($dado >= 1)
                    $dado = "Sim";
                else
                    $dado = "Não";
                */

                //Estrutura de repetição - WHILE
                $i = 1;
                while ($i <= 5)
                {
                    echo "$i \n"; // se não incrementa ele roda infinitamente
                    $i++; //incremento
                }

                //Estrutura de repetição - DO WHILE
                $i = 0;
                do
                {
                    echo "$i \n";
                    $i++;
                }
                while ($i <= 5);

                //Estrutura de repetição - FOR

                for ($i = 0; $i<=5; $i++)
                {
                    echo "$i \n";
                }

            } catch(Exception $e)
            {
                echo "Erro: " .$e->getMessage();
            }
        }
    ?>
  </body>
</html>