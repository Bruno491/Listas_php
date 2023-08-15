<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ler 7 números diferentes e imprimir o menor valor e a posição do menor valor na sequência de entrada</title>
  <link rel="stylesheet" type="text/css"  href="Exercicio_1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h1>Ler 7 números diferentes e imprimir o menor valor e a posição do menor valor na sequência de entrada</h1>
    <form action="Exercicio_2_resp.php" method="POST">
      <?php
        for($i=1; $i<=7; $i++){
      ?>
      <div class="col">
        <label for="valor<?= $i ?>" class="form-label">
            Informe o <?= $i ?>º valor
        </label>
        <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control">
      </div>
      <?php
        }
      ?>
  </div>
  <div class="row">
    <div class="col">
        <button type="submit" class="btn-danger">Ok</button>
    </div>
  </div>
</body>
</html>