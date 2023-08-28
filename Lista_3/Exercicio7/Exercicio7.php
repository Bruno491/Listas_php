<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
<form action="Exercicio7_Resp.php" method="post">
  <input type="text" name="nome" placeholder="Nome">
  <input type="number" name="nota1" placeholder="Nota 1">
  <input type="number" name="nota2" placeholder="Nota 2">
  <input type="submit" value="Enviar">
  <button type="button" onclick="adicionarAluno()">Adicionar aluno</button>
</form>

<script>
function adicionarAluno() {
  var inputNome = document.createElement("input");
  inputNome.type = "text";
  inputNome.name = "nome" + Math.random();
  inputNome.placeholder = "Nome";

  var inputNota1 = document.createElement("input");
  inputNota1.type = "number";
  inputNota1.name = "nota1" + Math.random();
  inputNota1.placeholder = "Nota 1";

  var inputNota2 = document.createElement("input");
  inputNota2.type = "number";
  inputNota2.name = "nota2" + Math.random();
  inputNota2.placeholder = "Nota 2";

  document.querySelector("form").appendChild(inputNome);
  document.querySelector("form").appendChild(inputNota1);
  document.querySelector("form").appendChild(inputNota2);
}
</script>
</body>
</html>