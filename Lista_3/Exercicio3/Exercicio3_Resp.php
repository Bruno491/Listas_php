<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>

<body>
    <?php
    // Pega os valores digitados pelo usuário
    $numeros = array();
    foreach ($_POST as $key => $value) {
        if (is_numeric($value)) {
            $numeros[] = $value;
        }
    }

    // Cria um mapa ordenado
    $numeros_ordenados = array_keys($numeros);
    sort($numeros_ordenados);

    // Solicita ao usuário um número para multiplicar
    $numero_a_multiplicar = $_POST['numero_a_multiplicar'];

    // Multiplica todos os elementos do mapa
    foreach ($numeros_ordenados as $numero) {
        $numeros[$numero] = $numeros[$numero] * $numero_a_multiplicar;
    }

    // Exibe os resultados na tela
    echo "Os números armazenados são: " . implode(", ", $numeros_ordenados) . ".";
    echo "<br>";
    echo "O resultado da multiplicação é: " . implode(", ", $numeros) . ".";
    ?>

</body>

</html>