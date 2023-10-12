<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>forms</title>
</head>
<body>
  <?php 
    $valor1 = $_GET['val1'] ?? 0;
    $valor2 = $_GET['val2'] ?? 0;
  ?>

  <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="">val 1</label>
      <input type="number" name="val1" id="val1" value="<?=$valor1?>">
      <label for="">val 2</label>
      <input type="number" name="val2" id="val2" value="<?=$valor2?>">
      <input type="submit" value="Somar">
    </form>
  </main>

  <section id="resultado">
    <h2>resultado da soma</h2>

    <?php 
      $soma = $valor1 + $valor2;
      echo "<p>a soma entre $valor1 e $valor2 e de $soma</p>";
    ?>
  </section>
</body>
</html>