<?php
    $frutas = array("morango", "maçã", "abacaxi"); //vetor classico - indice iniciando em 0 de vetores inteiros 0, 1, 2 - função array

    echo "<p>" .$frutas[0]. "</p>";

    $frutas[0] = "laranja";

    $frutas["fruta"] = 15;


    $cores[0] = "azul";
    $cores["cor"] = "laranja";

    $mapa = 
    [
        "valor1" => 1,
        "valor2" => 2,
        "valor3" => 3
    ];

    var_dump($cores);
    echo "<p></p>";
    print_r($mapa);

    //paracada
    #foreach($frutas as $valor) //aqui p/ acessar a chave
    foreach($frutas as $chave =>$valor)
    {
        echo "Na posição $chave temos a fruta: $valor";
    }
    
    echo "Quantidade de elementos: " .count($frutas);

    asort($frutas); // ordena pelo valor
    #ksort($frutas) // ordena pela chave

?>
