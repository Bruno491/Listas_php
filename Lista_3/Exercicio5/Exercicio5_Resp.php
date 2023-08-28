<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>

<body>
    <?php
    // Pega os números digitados pelo usuário
    $numeros = array();
    foreach ($_POST as $key => $value) {
        if (is_numeric($value)) {
            $numeros[] = $value;
        }
    }

    // Cria um vetor resultante
    $primos = array();

    // Percorre o vetor original
    foreach ($numeros as $numero) {
        // Verifica se o número é primo
        if (isPrime($numero)) {
            // Adiciona o número ao vetor resultante
            $primos[] = $numero;
        }
    }

    // Exibe os números do vetor resultante
    echo "Os números primos são: " . implode(", ", $primos) . ".";

    // Função para verificar se um número é primo
    function isPrime($numero)
    {
        // Verifica se o número é menor que 2
        if ($numero < 2) {
            return false;
        }

        // Verifica se o número é divisível por 2
        if ($numero % 2 == 0) {
            return false;
        }

        // Percorre os números de 3 até a raiz quadrada do número
        for ($i = 3; $i * $i <= $numero; $i += 2) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        // Se o número não foi dividido por nenhum número, ele é primo
        return true;
    }
    ?>

</body>

</html>