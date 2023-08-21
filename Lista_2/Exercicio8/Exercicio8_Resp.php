<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tinta</title>
</head>

<body>
    <?php
    // Pega o valor digitado pelo usuário
    $area = $_POST['area'];

    // Calcula a quantidade de tinta necessária
    $litros = $area / 3;
    $latas = ceil($litros / 18);

    // Calcula o preço total
    $preco = $latas * 80;

    // Exibe o resultado na tela
    echo "Você precisará de $latas latas de tinta. O preço total é R$ $preco.";
    ?>

</body>

</html>