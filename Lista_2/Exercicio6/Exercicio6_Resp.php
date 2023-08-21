<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação</title>
</head>

<body>
    <?php
    // Pega os números digitados pelo usuário
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Ordena os números
    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    // Verifica se os números são iguais
    if ($a == $b) {
        echo "Números iguais: $a";
    } else {
        echo "$a $b";
    }
    ?>
</body>

</html>