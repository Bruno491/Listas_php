<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de metros para centímetros</title>
</head>

<body>
    <?php
    // Pega o valor digitado pelo usuário
    $metros = $_POST['metros'];

    // Converte o valor em metros para centímetros
    $centimetros = $metros * 100;

    // Exibe o resultado na tela
    echo "O valor em centímetros é $centimetros";
    ?>

</body>

</html>