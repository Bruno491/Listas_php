<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fatorial</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
</head>

<body>
    <h1>Calcular Fatorial</h1>
    <?php
    // Pega o número digitado pelo usuário
    $numero = $_POST['numero'];

    // Calcula o fatorial do número
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    // Exibe o resultado na tela
    echo "O fatorial de $numero é $fatorial";
    ?>

</body>

</html>