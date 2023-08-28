<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>

<body>
    <?php
    // Pega os valores digitados pelo usuário
    $nomes = array();
    $notas = array();
    $total_notas = 0;

    foreach ($_POST as $key => $value) {
        if ($key == "nome") {
            $nomes[] = $value;
        } else if ($key == "nota") {
            $notas[] = $value;
            $total_notas += $value;
        }
    }

    // Calcula a média das notas
    $media = $total_notas / count($notas);

    // Obtém o nome do aluno com a maior nota
    $maior_nota = max($notas);
    $aluno_maior_nota = $nomes[array_search($maior_nota, $notas)];

    // Exibe os resultados na página
    echo "A média das notas da classe é de $media.<br>";
    echo "O aluno com a maior nota é $aluno_maior_nota.";
    ?>

</body>

</html>