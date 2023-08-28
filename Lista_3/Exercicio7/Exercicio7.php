<!DOCTYPE html>
<html>
<head>
    <title>Registro de Notas</title>
</head>
<body>
    <h1>Registro de Notas</h1>
    <form action="result.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<h2>Aluno $i</h2>";
            echo "<label>Nome: <input type='text' name='alunos[$i][nome]' required></label><br>";
            echo "<label>Nota 1: <input type='number' name='alunos[$i][nota1]' step='0.01' required></label><br>";
            echo "<label>Nota 2: <input type='number' name='alunos[$i][nota2]' step='0.01' required></label><br><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>