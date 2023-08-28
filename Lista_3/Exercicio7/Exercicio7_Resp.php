<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>

<body>
    <?php

    // Declara um array para armazenar os dados dos alunos
    $alunos = [];

    // Lê os dados enviados pelo formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numAlunos = count($_POST);

        for ($i = 0; $i < $numAlunos; $i++) {
            $alunos[] = [
                "nome" => $_POST["nome" . $i],
                "nota1" => intval($_POST["nota1" . $i]),
                "nota2" => intval($_POST["nota2" . $i]),
                "media" => ($alunos[$i]["nota1"] + $alunos[$i]["nota2"]) / 2
            ];
        }
    }

    // Ordena os alunos pela média
    usort($alunos, function ($a, $b) {
        return $a["media"] > $b["media"];
    });

    // Imprime os dados dos alunos
    echo "<h1>Aprovados</h1>";
    foreach ($alunos as $aluno) {
        if ($aluno["media"] >= 7) {
            echo "<p>Nome: " . $aluno["nome"] . " - Média: " . $aluno["media"] . "</p>";
        }
    }

    echo "<h1>Reprovados</h1>";
    foreach ($alunos as $aluno) {
        if ($aluno["media"] < 7) {
            echo "<p>Nome: " . $aluno["nome"] . " - Média: " . $aluno["media"] . "</p>";
        }
    }

    ?>

</body>

</html>