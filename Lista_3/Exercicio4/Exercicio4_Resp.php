<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>

<body>
    <?php
    // Cria um vetor com o nome dos meses
    $meses = array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");

    // Pega o número digitado pelo usuário
    $numero = $_POST['numero'];

    // Verifica se o número está entre 1 e 12
    if ($numero > 0 && $numero <= 12) {
        // Exibe o nome do mês correspondente
        echo "O mês correspondente é " . $meses[$numero - 1] . ".";
    } else {
        // Exibe uma mensagem de erro
        echo "O número digitado deve estar entre 1 e 12.";
    }
    ?>

</body>

</html>