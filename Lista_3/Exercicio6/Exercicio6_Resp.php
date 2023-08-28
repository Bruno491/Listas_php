<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>

<body>
    <?php
    // Pega os dados do formulário
    $produtos = array();
    foreach ($_POST as $key => $value) {
        if (is_numeric($value)) {
            $produtos[] = array(
                "nome" => "Produto " . $key,
                "preco" => $value
            );
        }
    }

    // Calcula a quantidade de produtos com preço inferior a R$50,00
    $quantidade_produtos_baratos = 0;
    foreach ($produtos as $produto) {
        if ($produto["preco"] < 50) {
            $quantidade_produtos_baratos++;
        }
    }

    // Calcula a média dos preços dos produtos com preço superior a R$100,00
    $quantidade_produtos_caros = 0;
    $total_preco_produtos_caros = 0;
    foreach ($produtos as $produto) {
        if ($produto["preco"] > 100) {
            $quantidade_produtos_caros++;
            $total_preco_produtos_caros += $produto["preco"];
        }
    }

    // Verifica se a quantidade de produtos é maior que zero
    if ($quantidade_produtos_caros > 0) {
        $media_preco_produtos_caros = $total_preco_produtos_caros / $quantidade_produtos_caros;
    } else {
        $media_preco_produtos_caros = "";
    }

    // Exibe os resultados
    echo "Quantidade de produtos com preço inferior a R$50,00: " . $quantidade_produtos_baratos . ".";
    echo "<br>";
    echo "Nomes dos produtos com preço entre R$50,00 e R$100,00: ";
    foreach ($produtos as $produto) {
        if ($produto["preco"] >= 50 && $produto["preco"] <= 100) {
            if (empty($produto["nome"])) {
                echo "Nenhum produto foi encontrado.";
            } else {
                echo ltrim($produto["nome"]) . ", ";
            }
        }
    }
    echo "<br>";

    // Verifica se a média é uma string vazia
    if (empty($media_preco_produtos_caros)) {
        echo "Média dos preços dos produtos com preço superior a R$100,00: Não há produtos com preço superior a R$100,00.";
    } else {
        echo "Média dos preços dos produtos com preço superior a R$100,00: R$" . number_format($media_preco_produtos_caros, 2, ",", ".") . ".";
    }


    ?>

</body>

</html>