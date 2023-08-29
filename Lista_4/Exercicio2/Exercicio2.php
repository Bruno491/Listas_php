<!DOCTYPE html>
<html>
<head>
    <title>Ordem Alfabética</title>
</head>
<body>
    <h1>Ordem Alfabética</h1>
    <form action="Exercicio2_Resp.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label>Aluno $i: <input type='text' name='alunos[]' required></label><br>";
        }
        ?>
        <input type="submit" value="Ordenar">
    </form>
</body>
</html>
