<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
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

    // Conta quantos números são positivos
    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;
    foreach ($numeros as $numero) {
        if ($numero > 0) {
            $positivos++;
        } else if ($numero < 0) {
            $negativos++;
        }
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    // Exibe os resultados na tela
    echo "Existem " . $positivos . " números positivos. <br>";
    echo "Existem " . $negativos . " números negativos. <br>";
    echo "Existem " . $pares . " números pares. <br>";
    echo "Existem " . $impares . " números ímpares.";
    ?>

</body>

</html>