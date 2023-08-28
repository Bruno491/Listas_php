<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>
    <?php
    $alunos = $_POST['alunos'];
    
    $aprovados = [];
    $reprovados = [];

    foreach ($alunos as $aluno) {
        $nome = $aluno['nome'];
        $nota1 = floatval($aluno['nota1']);
        $nota2 = floatval($aluno['nota2']);
        $media = ($nota1 + $nota2) / 2;
        
        if ($media >= 7) {
            $aprovados[$nome] = $media;
        } else {
            $reprovados[] = $nome;
        }
    }

    echo "<h2>Aprovados:</h2>";
    foreach ($aprovados as $nome => $media) {
        echo "$nome - Média: $media<br>";
    }

    echo "<h2>Reprovados:</h2>";
    foreach ($reprovados as $nome) {
        echo "$nome<br>";
    }
    ?>
</body>
</html>
