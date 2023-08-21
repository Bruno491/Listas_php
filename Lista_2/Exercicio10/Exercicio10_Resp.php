<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Pega os valores digitados pelo usuário
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Converte a altura de centímetros para metros
    $altura_em_metros = $altura / 100;

    // Calcula o IMC
    $imc = $peso / $altura_em_metros ** 2;

    // Define se a pessoa está acima ou abaixo do peso
    if ($imc < 18.5) {
        echo "Você está abaixo do peso.";
    } else if ($imc < 25) {
        echo "Você tem peso normal.";
    } else if ($imc < 30) {
        echo "Você está com sobrepeso.";
    } else if ($imc < 35) {
        echo "Você está com obesidade grau 1.";
    } else if ($imc < 40) {
        echo "Você está com obesidade grau 2.";
    } else {
        echo "Você está com obesidade grau 3.";
    }

    // Referência sobre o IMC
    echo "<br><br>Para saber mais sobre o IMC, visite o site da Organização Mundial da Saúde: <a href='https://www.who.int/news-room/fact-sheets/detail/body-mass-index-(bmi)'>https://www.who.int/news-room/fact-sheets/detail/body-mass-index-(bmi)"
    ?>
</body>

</html>