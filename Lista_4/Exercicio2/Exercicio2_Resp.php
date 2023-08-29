<!DOCTYPE html>
<html>
<head>
    <title>Nomes em Ordem Alfabética</title>
</head>
<body>
    <h1>Nomes em Ordem Alfabética</h1>
    <?php
    function ordenarNomes($nomes) {
        sort($nomes);
        return $nomes;
    }

    $alunos = $_POST['alunos'];
    $alunosOrdenados = ordenarNomes($alunos);

    echo "<ul>";
    foreach ($alunosOrdenados as $aluno) {
        echo "<li>$aluno</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
